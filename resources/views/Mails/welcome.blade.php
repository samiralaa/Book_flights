<x-mail::message>
# Introduction

Welcome  {{ Auth::user()->name }}

<a href="#" class="btn btn-primary stretched-link">Go Complite your data</a>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
