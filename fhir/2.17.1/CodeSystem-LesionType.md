# Lesion type - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lesion type**

## CodeSystem: Lesion type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/LesionType | *Version*:2.17.1 |
| Active as of 2022-09-19 | *Computable Name*:LesionType |

 
Lesion type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MenisklaesionTypeDKRR](ValueSet-MenisklaesionTypeDKRR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "LesionType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/LesionType",
  "version" : "2.17.1",
  "name" : "LesionType",
  "title" : "Lesion type",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Lesion type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "meniscal",
      "display" : "Meniscal lesion",
      "definition" : "Meniscal lesion / Menisklæsion"
    },
    {
      "code" : "root",
      "display" : "Root lesion",
      "definition" : "Root lesion / Rodlæsion"
    },
    {
      "code" : "ramp",
      "display" : "RAMP lesion",
      "definition" : "RAMP lesion / RAMP læsion"
    }
  ]
}

```
