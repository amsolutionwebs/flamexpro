


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome | @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{url('admin/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{url('admin/plugins/fontawesome-free/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('admin/plugins/fontawesome-free/css/all.min.css')}}">

  <link rel="stylesheet" href="{{url('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link href="{{url('admin/plugins/select2/select2.min.css')}}" rel="stylesheet" />
 
 <link rel="apple-touch-icon" sizes="180x180" href="{{url('admin/dist/fevicon/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{url('admin/dist/fevicon/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{url('admin/dist/fevicon/favicon-16x16.png')}}">
<link rel="manifest" href="{{url('admin/dist/fevicon/site.webmanifest')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
 
  <style>
    

   thead {
    background: rgb(255 155 36);;
    color: rgb(255,255,255)!important;
    text-align: center !important;
    padding: 10px 5px !important;
    line-height: 1.2 !important;
    border: 1px solid rgb(3,52,112)!important;
    vertical-align: middle;
    font-size: 0.80rem !important;
    border:1px solid black !important;
    }
::-webkit-scrollbar {
  width: 5px;
  height: 5px;
}

::-webkit-scrollbar-track {
  background-color: #fff;
}

::-webkit-scrollbar-thumb {
  background-color: #ccc;
  border: 1px solid rgb(193, 193, 193);
  border-radius: 10px;
}

#add_vbtn {
  
  background-color: #FF9800;
  width: 50px;
  height: 50px;
  text-align: center;
  border-radius: 4px;
  position: fixed;
  bottom: 30px;
  right: 30px;
  transition: background-color .3s, 
    opacity .5s, visibility .5s;
 
 
  z-index: 1000;
}
#add_vbtn::after {
  content: "\f077";
  font-family: FontAwesome;
  font-weight: normal;
  font-style: normal;
  font-size: 2em;
  line-height: 50px;
  color: #fff;
}
#add_vbtn:hover {
  cursor: pointer;
  background-color: #333;
}
#add_vbtn:active {
  background-color: #555;
}


.my-table-create {
    display: flex;
    justify-content: center;
    align-items: center;
 

}

.mytabledesing thead th {
  color: #fff !important;
  padding: 9px;
  text-align: center;                           
}

#sort_fileds {
  display: flex !important;
  flex-direction: row !important;
}
tfoot {
  color: #fff !important;
  padding: 9px;
  text-align: center; 
}
.mytabledesing  th, td{
  border: 1px solid black;
  border-collapse: collapse;
}

.mytabledesing td{
  border: 1px solid black ;
  border-collapse: collapse;
}

/* Styles for the content section */

/*loader*/
.pageloader {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url('admin/dist/img/loader.gif') 50% 50% no-repeat rgb(249, 249, 249);
  opacity: .8;
}


#skb { 
  position: absolute;
   z-index:999933;
    width:100%;
     border-radius:5px;
      border:0;
       margin-top:5px;
        text-align:center;
         margin-left: 250px;
        
}

.alert {
padding:5px 10px;
font-size:12px;
}
.alert-success {
color: #fff;
background-color: #4CB844;
border-color: #468847;
}
.alert-warning {
color: #fff;
background-color: #FB7E02;
border-color: #DF7C00;
}
.alert-danger,
.alert-error {
color: #fff;
background-color: #DC494C;
border-color: #b94a48;
}

#myTextareaaddPost {
    height: 200px; /* Set the desired height here */
    resize: vertical; /* Allow vertical resizing */
    padding: 10px; /* Optional: Add padding for better appearance */
}


.single_courses {
    
    border-radius: 8px !important;
    overflow: hidden;
   
    border: 1px solid #f99b4a;
    transition: all linear .3s !important;
    -webkit-transition: all linear .3s !important;
    -moz-transition: all linear .3s !important;
    -ms-transition: all linear .3s !important;
    -o-transition: all linear .3s;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    -ms-border-radius: 8px;
    -o-border-radius: 8px;
}

.single_courses_img {
    position: relative;
   width: 100% !important;
    height: 180px;
    object-fit: cover !important;

}


  </style>
 
@php 
  
  if(Session('uid'))
  {

  }

@endphp