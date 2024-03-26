@extends('layout')
@section('title')
@endsection
@section('content')
 <div class="absolute">
    <h3 class="text-3xl font-medium text-gray-700 mt-1 ml-5">Add Data Character</h3>
@if ($errors->any())
            <div class="flex text-red-500 ml-5">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
 </div>
    <form action="{{route('addCharacter')}}" method="POST" class="mx-auto max-w-xl mt-6">
        @csrf
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
                <label for="name" class="block text-sm font-semibold leading-6 text-black">Name</label>
                <div class="mt-2.5">
                    <input type="text" name="name" id="name"
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="race" class="block text-sm font-semibold leading-6 text-black">Race</label>
                <div class="mt-2.5">
                    <select name="race" id="race" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                        <option value="">Select Race</option>
                        <option value="Human">Human</option>
                        <option value="Elf">Elf</option>
                        <option value="Dwarf">Dwarf</option>
                        <option value="Orc">Orc</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="class" class="block text-sm font-semibold leading-6 text-black">Class</label>
                <div class="mt-2.5">
                    <select name="class" id="class" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                        <option value="">Select Class</option>
                        <option value="Warrior">Warrior</option>
                        <option value="Mage">Mage</option>
                        <option value="Thief">Thief</option>
                    </select>
                </div>
            </div>
            
            <div>
                <label for="level" class="block text-sm font-semibold leading-6 text-black">Level (number 1-50)</label>
                <div class="mt-2.5">
                    <input type="number" name="level" id="level"
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="strength" class="block text-sm font-semibold leading-6 text-black">Strength (number 10-20)</label>
                <div class="mt-2.5">
                    <input type="number" name="strength" id="strength"
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="dexterity" class="block text-sm font-semibold leading-6 text-black">Dexterity (number 10-20)</label>
                <div class="mt-2.5">
                    <input type="number" name="dexterity" id="dexterity"
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="constitution" class="block text-sm font-semibold leading-6 text-black">Constitution (number 10-20)</label>
                <div class="mt-2.5">
                    <input type="number" name="constitution" id="constitution"
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="intelligence" class="block text-sm font-semibold leading-6 text-black">Intelligence (number 10-20)</label>
                <div class="mt-2.5">
                    <input type="number" name="intelligence" id="intelligence"
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="wisdom" class="block text-sm font-semibold leading-6 text-black">Wisdom (number 10-20)</label>
                <div class="mt-2.5">
                    <input type="number" name="wisdom" id="wisdom"
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="charisma" class="block text-sm font-semibold leading-6 text-black">Charisma (number 10-20)</label>
                <div class="mt-2.5">
                    <input type="number" name="charisma" id="charisma"
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="mt-10">
                <button type="submit"
                    class="block w-full rounded-md bg-cyan-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
@endsection
