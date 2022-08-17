import { useState } from "react"
import { useNavigate } from 'react-router-dom';
import AuthUser from './AuthUser';

export default function Register() {
    const navigate = useNavigate();
    const {http,setToken} = AuthUser();
    const [name,setName] = useState();
    const [email,setEmail] = useState();
    const [password,setPassword] = useState();

    const submitForm = () =>{
        // api call
        http.post('/register',{email:email,password:password,name:name}).then((res)=>{
            navigate('/login')
        })
    }

    return(
        <div className="row justify-content-center pt-5">
            <div className="col-sm-6">
                <div className="card p-4">
                    <h1 className="text-center mb-3">Registrar </h1>
                    <div className="form-group">
                        <label>nome:</label>
                        <input type="test" className="form-control" placeholder="Digite seu nome"
                            onChange={e=>setName(e.target.value)}
                        id="email" />
                    </div>
                    <div className="form-group mt-3">
                        <label>Email:</label>
                        <input type="email" className="form-control" placeholder="Digite seu email"
                            onChange={e=>setEmail(e.target.value)}
                        id="email" />
                    </div>

                    <div className="form-group mt-3">
                        <label>Senha:</label>
                        <input type="password" className="form-control" placeholder="Digite sua senha"
                            onChange={e => setPassword(e.target.value)}
                        id="pwd" />
                    </div>
                    <button type="button" onClick={submitForm} className="btn btn-primary mt-4">Registrar</button>
                </div>
            </div>
        </div>
    )
}