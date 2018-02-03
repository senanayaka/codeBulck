# call back function 



            function getCount(arg1, arg2, callback) {
                // this generates a random number between
                // arg1 and arg2
                var my_number = Math.ceil(Math.random() * (arg1 - arg2) + arg2);
                // then we're done, so we'll call the callback and
                // pass our result
                console.log("1 " );
                callback(my_number);
                console.log("2 " );
            }
            // call the function
            getCount(5, 15, function(num) {
                // this anonymous function will run when the
                // callback is called
                console.log("3 " );
                console.log("callback called! " + num);
            });
