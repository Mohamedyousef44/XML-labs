<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Document</title>

    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            },
            container: {
                center: true,
            },
          },
          plugins: [
                require('@tailwindcss/forms'),
                ],
        }
      </script>
</head>
<body>


      <div class="container mx-auto flex flex-row justify-center items-center h-screen">
       
        <form class="w-3/6" method="Post" action="index.php" enctype="multipart/form-data">
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/4">
                <label class="block text-gray-500 font-bold md:text-start mb-1 md:mb-0 pr-4" >
                  Full Name
                </label>
              </div>
              <div class="md:w-3/4">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" name="name" value=" <?php echo $person['name'] ?? "" ?>">
              </div>
            </div>
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/4">
                <label class="block text-gray-500 font-bold md:text-start mb-1 md:mb-0 pr-4" >
                  Phone
                </label>
              </div>
              <div class="md:w-3/4">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="text" name="phone" value=" <?php echo $person['phone'] ?? "" ?>" >
              </div>
            </div>
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/4">
                <label class="block text-gray-500 font-bold md:text-start mb-1 md:mb-0 pr-4" for="inline-password">
                  Address
                </label>
              </div>
              <div class="md:w-3/4">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"  type="text" name="address"  value=" <?php echo $person['address'] ?? "" ?>">
              </div>
            </div>
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/4">
                <label class="block text-gray-500 font-bold md:text-start mb-1 md:mb-0 pr-4" >
                  Email
                </label>
              </div>
              <div class="md:w-3/4">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"  type="text" name="email" value=" <?php echo $person['email'] ?? "" ?>">
              </div>
            </div>

            <div class="flex justify-between">
              <div class="w-full flex flex-row justify-between items-center ">

                <input class=" w-auto shadow bg-purple-900 hover:bg-purple-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 rounded" type="submit" value="Next" name="next">
                <input class="w-auto shadow bg-purple-900 hover:bg-purple-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 rounded" type="submit" value="Previous" name="previous">
                <input class="w-auto shadow bg-purple-900 hover:bg-purple-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 rounded" type="submit" value="Delete" name="delete">
                <input class="w-auto shadow bg-purple-900 hover:bg-purple-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 rounded" type="submit" value="Insert" name="insert">
                <input class="w-auto shadow bg-purple-900 hover:bg-purple-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 rounded" type="submit" value="Update" name="update">
                
              </div>
            </div>

          </form>
      </div>
    
</body>
</html>