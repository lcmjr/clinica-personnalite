@extends('includes.principal')

@section('classe-pg', 'page-contato')
@section('conteudo')
    <h1 class="titulo cor-vinho titulo-principal txt-center">Contato</h1>
    <article class="central row">
        <div class="col-md-5 col-sm-5 col-xs-12 contato-col-phone">
            <h3 class="titulo cor-vinho titulo-contato-principal">Fale com a Personnalité</h3>
            {{$dados_contato[0]->telefone_1}}<br/>
            {{$dados_contato[0]->telefone_2}}<br/>
            {{$dados_contato[0]->telefone_3}}<br/><br/>
            Para dúvidas, informações ou sugestões,<br/> envie um email para:<br/>
            <span class="cor-vinho">{{$dados_contato[0]->email}}</span>
            <h3 class="titulo cor-vinho titulo-contato">Curta</h3>
            <a class="rede-facebook facebook-contato" target="_blank" href="{{$dados_contato[0]->facebook}}">clinicapersonnalite</a><br/>
            <h3 class="titulo cor-vinho titulo-contato">Endereço</h3>
            @include('includes.endereco')
        </div>
        <div class="col-md-7 col-sm-7 col-xs-12 contato-col-phone">
            <h3 class="titulo cor-vinho titulo-contato-principal" id="titulo-contato-principal-2">Pré Agendamento de Consulta</h3>
            Preencha o formulário abaixo para fazer o seu pré agendamento, e aguarde o nosso contato para confirmação de sua consulta.<br/><br/>
            <form method="post" action="">
                <div class="form-group">
                    <input name="nome" class="form-control" placeholder="Nome" type="text"/>
                </div>
                <div class="form-group">
                    <input name="email" class="form-control" placeholder="Email" type="email"/>
                </div>
                <div class="form-group">
                    <input name="telefone" class="form-control" placeholder="Telefone" type="tel"/>
                </div>
                <div class="form-group">
                    <select name="dia-de-semana" class="form-control">
                        <option>Qual dia da semana?</option>
                        <option value="0">Segunda Feira</option>
                        <option value="1">Terça Feira</option>
                        <option value="2">Quarta Feira</option>
                        <option value="3">Quinta Feira</option>
                        <option value="4">Sexta Feira</option>
                        <option value="5">Sábado</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="horario" class="form-control">
                        <option>Preferência de horário</option>
                        <option value="0">Manhã</option>
                        <option value="1">Tarde</option>
                        <option value="2">Noite</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="doutor" class="form-control">
                        <option>Doutor de sua preferência</option>
                        @foreach($doutores as $doutor)
                        <option value="{{$doutor->$doutor}}">{{$doutor->$doutor}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <span class="span-form">1ª vez na Clínica Personnalité?</span>
                    <label class="radio-inline"><input name="primeira-vez" type="radio" name="Sim">Sim</label>
                    <label class="radio-inline"><input name="primeira-vez" type="radio" name="Não">Não</label>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" name="informacoes" placeholder="Outras Informações"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn cor-vinho btn-block btn-default">Enviar</button>
                </div>
            </form>
        </div>
    </article>
    <section class="seta-vinho fundo-vinho container-maps">
        <h1 class="titulo txt-center">Como chegar?</h1>
        {!!$dados_contato[0]->maps!!}
    </section>
@stop