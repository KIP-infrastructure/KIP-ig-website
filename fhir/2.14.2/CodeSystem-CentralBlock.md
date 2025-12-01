# Central blokade - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Central blokade**

## CodeSystem: Central blokade 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/CentralBlock | *Version*:2.14.2 |
| Active as of 2022-06-09 | *Computable Name*:CentralBlock |

 
Tidspunkt for central blokade 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CentralBlock](ValueSet-CentralBlock.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "CentralBlock",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/CentralBlock",
  "version" : "2.14.2",
  "name" : "CentralBlock",
  "title" : "Central blokade",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Tidspunkt for central blokade",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "block_perop",
      "display" : "Block given peropratively",
      "definition" : "Blokade anlagt peroperativt"
    },
    {
      "code" : "block_preop_WA",
      "display" : "Block given preopratively, surgery planned WITH anasthesia",
      "definition" : "Blokade anlagt præoperativt, videre forløb kirurgi MED anæstesi"
    },
    {
      "code" : "block_preop_WOA",
      "display" : "Block given preopratively, surgery planned WITHOUT anasthesia",
      "definition" : "Blokade anlagt præoperativt, videre forløb kirurgi UDEN anæstesi"
    }
  ]
}

```
