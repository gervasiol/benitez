<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateColaboradoresRequest;
use App\Http\Requests\UpdateColaboradoresRequest;
use App\Libraries\Repositories\ColaboradoresRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class ColaboradoresController extends AppBaseController
{

	/** @var  ColaboradoresRepository */
	private $colaboradoresRepository;

	function __construct(ColaboradoresRepository $colaboradoresRepo)
	{
		$this->colaboradoresRepository = $colaboradoresRepo;
	}

	/**
	 * Display a listing of the Colaboradores.
	 *
	 * @return Response
	 */
	public function index()
	{
		$colaboradores = $this->colaboradoresRepository->paginate(10);

		return view('colaboradores.index')
			->with('colaboradores', $colaboradores);
	}

	/**
	 * Show the form for creating a new Colaboradores.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('colaboradores.create');
	}

	/**
	 * Store a newly created Colaboradores in storage.
	 *
	 * @param CreateColaboradoresRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateColaboradoresRequest $request)
	{
		$input = $request->all();

		$colaboradores = $this->colaboradoresRepository->create($input);

		Flash::success('Colaboradores saved successfully.');

		return redirect(route('colaboradores.index'));
	}

	/**
	 * Display the specified Colaboradores.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$colaboradores = $this->colaboradoresRepository->find($id);

		if(empty($colaboradores))
		{
			Flash::error('Colaboradores not found');

			return redirect(route('colaboradores.index'));
		}

		return view('colaboradores.show')->with('colaboradores', $colaboradores);
	}

	/**
	 * Show the form for editing the specified Colaboradores.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$colaboradores = $this->colaboradoresRepository->find($id);

		if(empty($colaboradores))
		{
			Flash::error('Colaboradores not found');

			return redirect(route('colaboradores.index'));
		}

		return view('colaboradores.edit')->with('colaboradores', $colaboradores);
	}

	/**
	 * Update the specified Colaboradores in storage.
	 *
	 * @param  int              $id
	 * @param UpdateColaboradoresRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateColaboradoresRequest $request)
	{
		$colaboradores = $this->colaboradoresRepository->find($id);

		if(empty($colaboradores))
		{
			Flash::error('Colaboradores not found');

			return redirect(route('colaboradores.index'));
		}

		$this->colaboradoresRepository->updateRich($request->all(), $id);

		Flash::success('Colaboradores updated successfully.');

		return redirect(route('colaboradores.index'));
	}

	/**
	 * Remove the specified Colaboradores from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$colaboradores = $this->colaboradoresRepository->find($id);

		if(empty($colaboradores))
		{
			Flash::error('Colaboradores not found');

			return redirect(route('colaboradores.index'));
		}

		$this->colaboradoresRepository->delete($id);

		Flash::success('Colaboradores deleted successfully.');

		return redirect(route('colaboradores.index'));
	}
}
