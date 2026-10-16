# Knogletransplantation (DHR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Knogletransplantation (DHR)**

## ValueSet: Knogletransplantation (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KnogletransplantationDHR | *Version*:2.27.0 |
| Active as of 2023-04-19 | *Computable Name*:KnogletransplantationDHR |

 
Knogletransplantation acetabulum/femur (DHR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "KnogletransplantationDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KnogletransplantationDHR",
  "version" : "2.27.0",
  "name" : "KnogletransplantationDHR",
  "title" : "Knogletransplantation (DHR)",
  "status" : "active",
  "date" : "2023-04-19T00:00:00+02:00",
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
  "description" : "Knogletransplantation acetabulum/femur (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "crumble",
        "display" : "Lidt smuld"
      },
      {
        "code" : "massive_transplant",
        "display" : "Massiv transplantering"
      },
      {
        "code" : "structural",
        "display" : "Strukturel graft"
      }]
    }]
  }
}

```
