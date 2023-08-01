@extends('layout.app')

@section('content')
    @include('page.about')
    @include('page.Facts')
    @include('page.skills')
    @include('page.resume')
    @include('page.services')
    @include('page.testimonials-section')
    @include('page.portfolio')
    @include('page.contact')
@endsection


@section('script')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#contactForm").validate({
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true
                    },
                    subject: {
                        required: true
                    },
                    message: {
                        required: true
                    }
                },
                messages: {
                    name: "Name field is required !",
                    email: "Email field is required !",
                    subject: "Subject field is required !",
                    message: "Message field is required !",
                }



            });
        });
    </script>
@endsection
