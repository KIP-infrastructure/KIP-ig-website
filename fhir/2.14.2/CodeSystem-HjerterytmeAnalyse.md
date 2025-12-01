# HjerterytmeAnalyse - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HjerterytmeAnalyse**

## CodeSystem: HjerterytmeAnalyse 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HjerterytmeAnalyse | *Version*:2.14.2 |
| Active as of 2022-06-29 | *Computable Name*:HjerterytmeAnalyse |

 
Analyse af hjerterytme 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Hjerterytme](ValueSet-Hjerterytme.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HjerterytmeAnalyse",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HjerterytmeAnalyse",
  "version" : "2.14.2",
  "name" : "HjerterytmeAnalyse",
  "title" : "HjerterytmeAnalyse",
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
  "description" : "Analyse af hjerterytme",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "non_stoed",
      "display" : "Ikke-stødbar rytme",
      "definition" : "Ikke-stødbar rytme"
    },
    {
      "code" : "stoed",
      "display" : "Stødbar rytme",
      "definition" : "Stødbar rytme"
    },
    {
      "code" : "ingen_rytmeana",
      "display" : "Ingen rytmeanalyse",
      "definition" : "Ingen rytmeanalyse"
    }
  ]
}

```
