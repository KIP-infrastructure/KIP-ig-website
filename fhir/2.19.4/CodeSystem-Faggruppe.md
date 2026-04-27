# Faggruppe - KIP Infrastructure v2.19.4

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Faggruppe**

## CodeSystem: Faggruppe 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Faggruppe | *Version*:2.19.4 |
| Active as of 2022-06-29 | *Computable Name*:FaggruppeCS |

 
Faggruppe involveret i hændelser 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Faggruppe](ValueSet-Faggruppe.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Faggruppe",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Faggruppe",
  "version" : "2.19.4",
  "name" : "FaggruppeCS",
  "title" : "Faggruppe",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Faggruppe involveret i hændelser",
  "content" : "complete",
  "count" : 2,
  "concept" : [{
    "code" : "sund_pers",
    "display" : "Sundhedspersonale",
    "definition" : "Sundhedspersonale"
  },
  {
    "code" : "andre",
    "display" : "Andre",
    "definition" : "Andre"
  }]
}

```
