<? 

/*

    Helper pedentek menu active 
    Dengan cara mencari class css 
    yang mengunakan aktive 


*/ 

if(!function_exist('active_link')){

    public function active_menu($controller){
        // Buat instance dari class obeject CI 
        $ci = get_instance() ; 
        $class = $CI->router->fetch_class();

        return  ($class === $controller ) ? 'active' : '';
        
    }
}