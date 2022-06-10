<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>

        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an Idea" class="w-full rounded-xl border-none placeholder-gray-500 px-4 py-2 pl-8">

            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 fill-gray-500" viewBox="0 0 512 512">
                    <path d="M507.312 484.688L365.85 343.227C397.041 306.848
                    416 259.676 416 208C416 93.125 322.875 0 208 0S0 93.125
                    0 208S93.125 416 208 416C259.676 416 306.848 397.039 343.225
                    365.852L484.687 507.312C487.812 510.438 491.906 512 496
                    512S504.188 510.438 507.312 507.312C513.562 501.062 513.562
                    490.938 507.312 484.688ZM208 384C110.953 384 32 305.047 32
                    208S110.953 32 208 32S384 110.953 384 208S305.047 384 208 384Z"/>
                </svg>
            </div>
        </div>

    </div> <!-- End of Filters -->
</x-app-layout>
