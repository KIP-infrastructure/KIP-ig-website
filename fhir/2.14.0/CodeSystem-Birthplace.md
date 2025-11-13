# Birthplace - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Birthplace**

## CodeSystem: Birthplace 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Birthplace | *Version*:2.14.0 |
| Active as of 2022-09-30 | *Computable Name*:Birthplace |

 
Birthplace 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FoedselsstedRETSPSYK](ValueSet-FoedselsstedRETSPSYK.md)
* [OperationDanmarkUdlandetDHR](ValueSet-OperationDanmarkUdlandetDHR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Birthplace",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Birthplace",
  "version" : "2.14.0",
  "name" : "Birthplace",
  "title" : "Birthplace",
  "status" : "active",
  "date" : "2022-09-30T00:00:00+02:00",
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
  "description" : "Birthplace",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 11,
  "concept" : [
    {
      "code" : "DK",
      "display" : "Denmark",
      "definition" : "Denmark / Danmark"
    },
    {
      "code" : "GL",
      "display" : "Greenland",
      "definition" : "Greenland / Grønland"
    },
    {
      "code" : "IR",
      "display" : "Iran",
      "definition" : "Iran"
    },
    {
      "code" : "eastern_europe",
      "display" : "Eastern Europe",
      "definition" : "Eastern Europe / Østeuropa"
    },
    {
      "code" : "west",
      "display" : "West",
      "definition" : "West / Vesten"
    },
    {
      "code" : "middle_east",
      "display" : "Middle East",
      "definition" : "Middle East / Mellemøsten"
    },
    {
      "code" : "far_east",
      "display" : "Far East",
      "definition" : "Far East / Fjernøsten"
    },
    {
      "code" : "africa",
      "display" : "Africa",
      "definition" : "Africa / Afrika",
      "concept" : [
        {
          "code" : "north_africa",
          "display" : "North Africa",
          "definition" : "North Africa / Nordafrika"
        }
      ]
    },
    {
      "code" : "rest_of_world",
      "display" : "Rest of World",
      "definition" : "Rest of World / Resten af verden"
    },
    {
      "code" : "abroad",
      "display" : "Abroad",
      "definition" : "Abroad / Udlandet"
    }
  ]
}

```
