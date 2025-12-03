# Anæstesi Type Generel - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anæstesi Type Generel**

## CodeSystem: Anæstesi Type Generel 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaTypeGen | *Version*:2.15.0 |
| Active as of 2022-06-30 | *Computable Name*:AnasthesiaTypeGen |

 
Generel Anæstesiydelse - Tillæg 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AnasthesiaTypeGen](ValueSet-AnasthesiaTypeGen.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AnasthesiaTypeGen",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaTypeGen",
  "version" : "2.15.0",
  "name" : "AnasthesiaTypeGen",
  "title" : "Anæstesi Type Generel",
  "status" : "active",
  "date" : "2022-06-30T00:00:00+02:00",
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
  "description" : "Generel Anæstesiydelse - Tillæg",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "inhalation",
      "display" : "Inhalation",
      "definition" : "Inhalation"
    },
    {
      "code" : "IV_inhalation",
      "display" : "IV og inhalation",
      "definition" : "IV og inhalation"
    },
    {
      "code" : "TIVA",
      "display" : "TIVA",
      "definition" : "TIVA"
    }
  ]
}

```
