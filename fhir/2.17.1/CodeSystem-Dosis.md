# Dosis - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dosis**

## CodeSystem: Dosis 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Dosis | *Version*:2.17.1 |
| Active as of 2023-12-19 | *Computable Name*:Dosis |

 
Dosis i givne mængder 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DosisAKbehDKR](ValueSet-DosisAKbehDKR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Dosis",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Dosis",
  "version" : "2.17.1",
  "name" : "Dosis",
  "title" : "Dosis",
  "status" : "active",
  "date" : "2023-12-19T00:00:00+02:00",
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
  "description" : "Dosis i givne mængder",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "le5000ie",
      "display" : "<= 5000",
      "definition" : "<= 5000 IE"
    },
    {
      "code" : "gt5000ie",
      "display" : "> 5000",
      "definition" : "> 5000 IE"
    }
  ]
}

```
