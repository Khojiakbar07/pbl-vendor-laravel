<template >
    <div>
        <div class="container">
            <div class="login_page">
                <div class="login">
                    <div class="login_inputs">
                        <label for="">name</label>
                        <input type="text">
                        <label for="">surname</label>
                        <input type="text">
                        <div class="login_inputs_btns">
                            <button @click="GoToMainpage">login</button>
                            <button>Sign up</button>
                        </div>
                    </div>
                </div>
                <div class="logout">

                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default{
    methods:{
        GoToMainpage(){
            this.$router.push({name: 'menu'});
        }
    }
}


</script>
<style scoped>

.container{
    width: 100%;
    height: 100vh;
    background: #3662f4;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login_page{
    width: 500px;
    height: 500px;
    background: #fff;
}

.login_inputs{
    width: 90%;
    height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
 }

 .login{
    padding-top: 50px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
 }

input{
    width: 100%;
}

.login_inputs_btns{
    width: 40%;
    display: flex;
    justify-content: space-between;
}

.login_inputs_btns button{
    padding: 15px;
    background: #3200fb;
    border-radius: 10px;
    border: none;
}

.login_inputs input{
    width: 100%;
    height: 30px;
    border-radius: 25px;
    padding: 10px;
    
}

.login_inputs label{
    font-style: normal;
    font-size: 26px;

}




    
</style>