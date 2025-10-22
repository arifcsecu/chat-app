<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Contact Form - Tailwind</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen flex items-start justify-center py-10">
  <div class="w-full max-w-2xl mx-4">
    <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
      <div class="bg-blue-600 text-white px-6 py-4">
        <h1 class="text-2xl font-semibold tracking-tight">Contact Form</h1>
      </div>

      <form class="p-6 space-y-6" x-data="{ fileName: 'No file chosen' }" action="{{ route('contact') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
          <input id="name" name="name" type="text" placeholder="Your Name"
            class="block w-full rounded-md border border-gray-300 px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
          <input id="email" name="email" type="email" placeholder="Your Email"
            class="block w-full rounded-md border border-gray-300 px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
        </div>

        <div>
          <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
          <input id="subject" name="subject" type="text" placeholder="Subject"
            class="block w-full rounded-md border border-gray-300 px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
        </div>

        <div>
          <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
          <textarea id="message" name="message" rows="5" placeholder="Message"
            class="block w-full rounded-md border border-gray-300 px-4 py-3 placeholder-gray-400 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Attach File</label>
          <div class="flex items-center gap-4">
            <label for="file" class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 rounded-md cursor-pointer text-sm shadow-sm hover:bg-gray-50">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16v4h10v-4m-5-4v8m0 0V4" /></svg>
              <span>Choose File</span>
            </label>

            <input id="file" name="file" type="file" class="sr-only"
                   @change="fileName = $event.target.files.length ? $event.target.files[0].name : 'No file chosen'">

            <div class="text-sm text-gray-600" x-text="fileName">No file chosen</div>
          </div>
        </div>

        <div class="pt-2 border-t border-gray-100 flex items-center justify-between">
          <div class="text-sm text-gray-500">Optional note or status here</div>
          <button type="submit"
            class="inline-flex items-center px-5 py-2.5 bg-blue-600 text-white rounded-md font-medium shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
