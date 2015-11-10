<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\ClientesRepository;
use App\Models\Clientes;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class ClientesAPIController extends AppBaseController
{
	/** @var  ClientesRepository */
	private $clientesRepository;

	function __construct(ClientesRepository $clientesRepo)
	{
		$this->clientesRepository = $clientesRepo;
	}

	/**
	 * Display a listing of the Clientes.
	 * GET|HEAD /clientes
	 *
	 * @return Response
	 */
	public function index()
	{
		$clientes = $this->clientesRepository->all();

		return $this->sendResponse($clientes->toArray(), "Clientes retrieved successfully");
	}

	/**
	 * Show the form for creating a new Clientes.
	 * GET|HEAD /clientes/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Clientes in storage.
	 * POST /clientes
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Clientes::$rules) > 0)
			$this->validateRequestOrFail($request, Clientes::$rules);

		$input = $request->all();

		$clientes = $this->clientesRepository->create($input);

		return $this->sendResponse($clientes->toArray(), "Clientes saved successfully");
	}

	/**
	 * Display the specified Clientes.
	 * GET|HEAD /clientes/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$clientes = $this->clientesRepository->apiFindOrFail($id);

		return $this->sendResponse($clientes->toArray(), "Clientes retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Clientes.
	 * GET|HEAD /clientes/{id}/edit
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
	 * Update the specified Clientes in storage.
	 * PUT/PATCH /clientes/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Clientes $clientes */
		$clientes = $this->clientesRepository->apiFindOrFail($id);

		$result = $this->clientesRepository->updateRich($input, $id);

		$clientes = $clientes->fresh();

		return $this->sendResponse($clientes->toArray(), "Clientes updated successfully");
	}

	/**
	 * Remove the specified Clientes from storage.
	 * DELETE /clientes/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->clientesRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Clientes deleted successfully");
	}
}
