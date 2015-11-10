<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateOperadoresRequest;
use App\Http\Requests\UpdateOperadoresRequest;
use App\Libraries\Repositories\OperadoresRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class OperadoresController extends AppBaseController
{

	/** @var  OperadoresRepository */
	private $operadoresRepository;

	function __construct(OperadoresRepository $operadoresRepo)
	{
		$this->operadoresRepository = $operadoresRepo;
	}

	/**
	 * Display a listing of the Operadores.
	 *
	 * @return Response
	 */
	public function index()
	{
		$operadores = $this->operadoresRepository->paginate(10);

		return view('operadores.index')
			->with('operadores', $operadores);
	}

	/**
	 * Show the form for creating a new Operadores.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('operadores.create');
	}

	/**
	 * Store a newly created Operadores in storage.
	 *
	 * @param CreateOperadoresRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateOperadoresRequest $request)
	{
		$input = $request->all();

		$operadores = $this->operadoresRepository->create($input);

		Flash::success('Operadores saved successfully.');

		return redirect(route('operadores.index'));
	}

	/**
	 * Display the specified Operadores.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$operadores = $this->operadoresRepository->find($id);

		if(empty($operadores))
		{
			Flash::error('Operadores not found');

			return redirect(route('operadores.index'));
		}

		return view('operadores.show')->with('operadores', $operadores);
	}

	/**
	 * Show the form for editing the specified Operadores.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$operadores = $this->operadoresRepository->find($id);

		if(empty($operadores))
		{
			Flash::error('Operadores not found');

			return redirect(route('operadores.index'));
		}

		return view('operadores.edit')->with('operadores', $operadores);
	}

	/**
	 * Update the specified Operadores in storage.
	 *
	 * @param  int              $id
	 * @param UpdateOperadoresRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateOperadoresRequest $request)
	{
		$operadores = $this->operadoresRepository->find($id);

		if(empty($operadores))
		{
			Flash::error('Operadores not found');

			return redirect(route('operadores.index'));
		}

		$this->operadoresRepository->updateRich($request->all(), $id);

		Flash::success('Operadores updated successfully.');

		return redirect(route('operadores.index'));
	}

	/**
	 * Remove the specified Operadores from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$operadores = $this->operadoresRepository->find($id);

		if(empty($operadores))
		{
			Flash::error('Operadores not found');

			return redirect(route('operadores.index'));
		}

		$this->operadoresRepository->delete($id);

		Flash::success('Operadores deleted successfully.');

		return redirect(route('operadores.index'));
	}
}
