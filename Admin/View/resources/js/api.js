let apiKey="15a80b84fdd30a6dcc2f768d";
let api=`https://v6.exchangerate-api.com/v6/${apiKey}/latest/USD`
const amount ='10000'
const fromCurrency = 'MMK'
const toCurrency ="USD"
fetch(api)
.then(resp=>resp.json())
.then((data)=>{
    let fromExchangeRate=data.conversion_rates
    [fromCurrency];
    let toExchangeRate=data.conversion_rates
    [toCurrency];
    const convertedAmount=(amount/fromExchangeRate)*toExchangeRate
    console.log(convertedAmount)

}
)