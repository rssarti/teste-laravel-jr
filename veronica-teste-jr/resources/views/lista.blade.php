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





        </tbody>
      </table>
      <div class="container px-5 py-5 mx-auto">
      {{ $contacts->links()}}
      </div>
    </div>

</section>






</body>
</html>
