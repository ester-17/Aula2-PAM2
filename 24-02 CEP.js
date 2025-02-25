import { Text, SafeAreaView, StyleSheet, TextInput, Button } from 'react-native';
import { useState } from 'react';

export default function App() {
    let [cep, setCep] = useState(null);
    let [render, setRender] = useState([]);

    let BuscaCep = (xcep) => {
        let url = `https://viacep.com.br/ws/${xcep}/json/`;
        console.log(url);
        fetch(url)
            .then((resp) => { return resp.json() })
            .then((dados) => {
                console.log(dados);
                console.log(dados.logradouro);
                console.log(dados["logradouro"]);
                setRender(dados);
            })
            .catch((erro) => { console.log(erro) });
    }

    return (
        <SafeAreaView style={styles.container}>
            <Text style={styles.title}>CEP</Text>
            <TextInput
                onChangeText={(value) => { setCep(value) }}
                placeholder="Digite CEP"
                style={styles.input}
            />
            <Button
                title="Buscar"
                onPress={() => { BuscaCep(cep) }}
            />

            <Text>Endereço: {render["logradouro"]}</Text>
            <Text>Bairro: {render["bairro"]}</Text>
            <Text>Cidade: {render.localidade}</Text>
            <Text>Estado: {render.uf}</Text>
        </SafeAreaView>
    );
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        justifyContent: 'center',
        padding: 8,
        margin: 20
    },
    title: {
        fontSize: 24, // Adjust the font size as needed
        fontWeight: 'bold',
        textAlign: 'center',
        marginBottom: 20 // Add some space below the title
    },
    input: {
        height: 40,
        borderColor: 'gray',
        borderWidth: 1,
        marginBottom: 20,
        paddingHorizontal: 10
    },
});
