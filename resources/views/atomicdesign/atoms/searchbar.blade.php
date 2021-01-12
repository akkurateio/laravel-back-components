<akk-search-simple action="{{ route('search', uuid()) }}" keyword="{{ request('query') ?? null }}">
    <template v-slot:csrf>@csrf</template>
</akk-search-simple>
