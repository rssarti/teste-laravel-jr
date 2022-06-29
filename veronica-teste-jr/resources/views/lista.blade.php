<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lista de Contatos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

<section class="text-gray-600 body-font">



  <div class="container px-5 py-24 mx-auto">
   <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto mb-8">
      <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900">Minha Lista de Contatos</h1>
      <button class="flex-shrink-0 text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg mt-10 sm:mt-0"><a href="{{ route('create') }}">Adicionar contato</a></button>
    </div>
    <div class="w-full mx-auto overflow-auto">
        <form
            method="get"
            action=""
            class="flex items-center space-x-5 mb-4">
            @csrf

        <input type="text" id="search" name="search" placeholder="pesquise contatos..."
                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                <button type="submit" class="flex ml-auto text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded">Pesquisar</button>
        </form>
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Nome</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Email</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Telefone</th>
            <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
          <tr>
            <td></td>
            <td class="px-4 py-3">{{ $contact->name}}</td>
            <td class="px-4 py-3">{{ $contact->email}}</td>
            <td class="px-4 py-3">{{ $contact->phone}}</td>

            <td class="w-10 text-center">
             <div class="flex">
                <button class="rounded-full w-10 h-10  text-white bg-green-500 hover:bg-green-600 p-0 border-0 inline-flex items-center justify-center text-white ml-4">
                  <a href="{{ route('edit', $contact->id) }}"><i class='bx bx-edit-alt' ></i></a>
                </button>

                  <button  type ="submit" class="rounded-full w-10 h-10  text-white bg-red-500 hover:bg-red-600 p-0 border-0 inline-flex items-center justify-center text-white ml-4">
                 <a href="{{ route('delete', $contact->id) }}" > <i class='bx bx-trash'></i> </a>
                </button>
              </div>
            </td>
          </tr>
          @endforeach

          {{ $contacts->links()}}



        </tbody>
      </table>
    </div>

</section>






</body>
</html>
