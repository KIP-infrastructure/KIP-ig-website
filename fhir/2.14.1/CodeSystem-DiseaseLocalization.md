# Disease localization - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Disease localization**

## CodeSystem: Disease localization 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/DiseaseLocalization | *Version*:2.14.1 |
| Active as of 2022-06-07 | *Computable Name*:DiseaseLocalization |

 
Disease localization 

 This Code system is referenced in the content logical definition of the following value sets: 

* [LokationLymphomas](ValueSet-LokationLymphomas.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "DiseaseLocalization",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseaseLocalization",
  "version" : "2.14.1",
  "name" : "DiseaseLocalization",
  "title" : "Disease localization",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Disease localization",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "nodal",
      "display" : "Nodal",
      "definition" : "Only nodal / Kun nodalt",
      "concept" : [
        {
          "code" : "nodal_extranodal",
          "display" : "Primary nodal, secondary extranodal",
          "definition" : "Primary nodal, secondary extranodal / Primært nodal, sekundært ekstranodalt"
        }
      ]
    },
    {
      "code" : "extranodel",
      "display" : "Extranodal",
      "definition" : "Only extranodal / Kun ekstranodalt",
      "concept" : [
        {
          "code" : "extranodal_nodal",
          "display" : "Primary extranodal, secondary nodal",
          "definition" : "Primary extranodal, secondary nodal / Primært ekstranodalt, sekundært nodalt"
        }
      ]
    }
  ]
}

```
