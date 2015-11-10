<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\ColaboradoresRepository;
use App\Models\Colaboradores;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class ColaboradoresAPIController extends AppBaseController
{
	/** @var  ColaboradoresRepository */
	private $colaboradoresRepository;

	function __construct(ColaboradoresRepository $colaboradoresRepo)
	{
		$this->colaboradoresRepository = $colaboradoresRepo;
	}

	/**
	 * Display a listing of the Colaboradores.
	 * GET|HEAD /colaboradores
	 *
	 * @return Response
	 */
	public function index()
	{
		$colaboradores = $this->colaboradoresRepository->all();

		return $this->sendResponse($colaboradores->toArray(), "Colaboradores retrieved successfully");
	}

	/**
	 * Show the form for creating a new Colaboradores.
	 * GET|HEAD /colaboradores/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Colaboradores in storage.
	 * POST /colaboradores
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Colaboradores::$rules) > 0)
			$this->validateRequestOrFail($request, Colaboradores::$rules);

		$input = $request->all();

		$colaboradores = $this->colaboradoresRepository->create($input);

		return $this->sendResponse($colaboradores->toArray(), "Colaboradores saved successfully");
	}

	/**
	 * Display the specified Colaboradores.
	 * GET|HEAD /colaboradores/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$colaboradores = $this->colaboradoresRepository->apiFindOrFail($id);

		return $this->sendResponse($colaboradores->toArray(), "Colaboradores retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Colaboradores.
	 * GET|HEAD /colaboradores/{id}/edit
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		// maybe, you can return a template for JS
//		Errors::throwHttpExceptionWithCode(Errors::EDITION_FORM_NOT_EXISTS, ['id' => $id], static::getHATEOAS(['%id' => $id]));
	}

	/**
	 * Update the specified Colaboradores in storage.
	 * PUT/PATCH /colaboradores/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Colaboradores $colaboradores */
		$colaboradores = $this->colaboradoresRepository->apiFindOrFail($id);

		$result = $this->colaboradoresRepository->updateRich($input, $id);

		$colaboradores = $colaboradores->fresh();

		return $this->sendResponse($colaboradores->toArray(), "Colaboradores updated successfully");
	}

	/**
	 * Remove the specified Colaboradores from storage.
	 * DELETE /colaboradores/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->colaboradoresRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Colaboradores deleted successfully");
	}
}
