# Defibrillering_Analyse - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Defibrillering_Analyse**

## CodeSystem: Defibrillering_Analyse 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/DefibrilleringAnalyse | *Version*:2.17.1 |
| Active as of 2022-06-29 | *Computable Name*:DefibrilleringAnalyse |

 
Metode til analyse/defibrillering af hjerterytme 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RytmeAnalyseMetode](ValueSet-RytmeAnalyseMetode.md)
* [RytmeDefibrilleringMetode](ValueSet-RytmeDefibrilleringMetode.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "DefibrilleringAnalyse",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/DefibrilleringAnalyse",
  "version" : "2.17.1",
  "name" : "DefibrilleringAnalyse",
  "title" : "Defibrillering_Analyse",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Metode til analyse/defibrillering af hjerterytme",
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "aed",
      "display" : "AED",
      "definition" : "AED"
    },
    {
      "code" : "ekg",
      "display" : "Anden EKG-monitorering",
      "definition" : "Anden EKG-monitorering"
    },
    {
      "code" : "ingen_defibr",
      "display" : "Ingen defibrillering",
      "definition" : "Ingen defibrillering"
    },
    {
      "code" : "man_defibr",
      "display" : "Manuel defibrillering",
      "definition" : "Manuel defibrillering"
    },
    {
      "code" : "andet",
      "display" : "Andet",
      "definition" : "Andet"
    }
  ]
}

```
