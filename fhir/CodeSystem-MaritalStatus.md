# Marital status / Living with others - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Marital status / Living with others**

## CodeSystem: Marital status / Living with others 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MaritalStatus | *Version*:2.13.0 |
| Active as of 2022-06-21 | *Computable Name*:MaritalStatus |

 
Marital status / Living with others 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Boligform](ValueSet-Boligform.md)
* [CivilstandDAP](ValueSet-CivilstandDAP.md)
* [CivilstatusRETSPSYK](ValueSet-CivilstatusRETSPSYK.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MaritalStatus",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MaritalStatus",
  "version" : "2.13.0",
  "name" : "MaritalStatus",
  "title" : "Marital status / Living with others",
  "status" : "active",
  "date" : "2022-06-21T00:00:00+02:00",
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
  "description" : "Marital status / Living with others",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 10,
  "concept" : [
    {
      "code" : "unmarried",
      "display" : "Ugift",
      "definition" : "Ugift"
    },
    {
      "code" : "married",
      "display" : "Gift",
      "definition" : "Gift"
    },
    {
      "code" : "married_child",
      "display" : "Gift med børn",
      "definition" : "Gift med børn"
    },
    {
      "code" : "widowhood",
      "display" : "Enkestand",
      "definition" : "Enkestand"
    },
    {
      "code" : "divorced",
      "display" : "Fraskilt",
      "definition" : "Fraskilt"
    },
    {
      "code" : "cohabitant",
      "display" : "Samboende",
      "definition" : "Samboende"
    },
    {
      "code" : "livingalone",
      "display" : "Bor alene",
      "definition" : "Bor alene"
    },
    {
      "code" : "livingalone_child",
      "display" : "Bor alene med børn",
      "definition" : "Bor alene med børn"
    },
    {
      "code" : "living_parents",
      "display" : "Living with parents",
      "definition" : "Living with parents / Bor med forældre"
    },
    {
      "code" : "other",
      "display" : "Andet",
      "definition" : "Andet"
    }
  ]
}

```
