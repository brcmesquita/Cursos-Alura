class NegociacaoController {

    constructor() {
    
        const $ = document.querySelector.bind(document);
        this._inputData = $('#data');
        this._inputQuantidade = $('#quantidade');
        this._inputValor = $('#valor');
        this._listaNegociacoes = new ListaNegociacoes();
        this._negociacoesView = new NegociacoesView($('#negociacoesView'));
        this._negociacoesView.update(this._listaNegociacoes);
        this._mensagem = new Mensagem();
        this._mensagemView = new MensagemView($('#mensagemView'));
        this._mensagemView.update(this._mensagem);

    }
    
    adicionar(event) {
        
        event.preventDefault();

       this._listaNegociacoes.adicionar(this._criarNegociacao());
       this._negociacoesView.update(this._listaNegociacoes);

       this._mensagem.texto = 'Negociação adicionada com sucesso';
       this._mensagemView.update(this._mensagem);
       
       this._limparFormulario();
       
        //console.log(this._listaNegociacoes.negociacoes);
        // adicionar a negociação em uma lista
    }

    _criarNegociacao() {

        return new Negociacao(
            DateHelper.textoParaData(this._inputData.value),
            this._inputQuantidade.value,
            this._inputValor.value
        );
    }

    _limparFormulario() {
        
        this._inputData.value = '';
        this._inputQuantidade.value = 1;
        this._inputValor.value = 0.0;

        this._inputData.focus();
    }
}