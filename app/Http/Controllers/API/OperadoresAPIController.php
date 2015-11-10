<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\OperadoresRepository;
use App\Models\Operadores;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class OperadoresAPIController extends AppBaseController
{
	/** @var  OperadoresRepository */
	private $operadoresRepository;

	function __construct(OperadoresRepository $operadoresRepo)
	{
		$this->operadoresRepository = $operadoresRepo;
	}

	/**
	 * Display a listing of the Operadores.
	 * GET|HEAD /operadores
	 *
	 * @return Response
	 */
	public function index()
	{
		$operadores = $this->operadoresRepository->all();

		return $this->sendResponse($operadores->toArray(), "Operadores retrieved successfully");
	}

	/**
	 * Show the form for creating a new Operadores.
	 * GET|HEAD /operadores/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Operadores in storage.
	 * POST /operadores
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Operadores::$rules) > 0)
			$this->validateRequestOrFail($request, Operadores::$rules);

		$input = $request->all();

		$operadores = $this->operadoresRepository->create($input);

		return $this->sendResponse($operadores->toArray(), "Operadores saved successfully");
	}

	/**
	 * Display the specified Operadores.
	 * GET|HEAD /operadores/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$operadores = $this->operadoresRepository->apiFindOrFail($id);

		return $this->sendResponse($operadores->toArray(), "Operadores retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Operadores.
	 * GET|HEAD /operadores/{id}/edit
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
	 * Update the specified Operadores in storage.
	 * PUT/PATCH /operadores/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Operadores $operadores */
		$operadores = $this->operadoresRepository->apiFindOrFail($id);

		$result = $this->operadoresRepository->updateRich($input, $id);

		$operadores = $operadores->fresh();

		return $this->sendResponse($operadores->toArray(), "Operadores updated successfully");
	}

	/**
	 * Remove the specified Operadores from storage.
	 * DELETE /operadores/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->operadoresRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Operadores deleted successfully");
	}
}
