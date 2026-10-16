# Revision, indikation (DHR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision, indikation (DHR)**

## ValueSet: Revision, indikation (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RevisionIndikationDHR | *Version*:2.27.0 |
| Active as of 2022-11-15 | *Computable Name*:RevisionIndikationDHR |

 
Revision, indikation (DHR) 

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
  "id" : "RevisionIndikationDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RevisionIndikationDHR",
  "version" : "2.27.0",
  "name" : "RevisionIndikationDHR",
  "title" : "Revision, indikation (DHR)",
  "status" : "active",
  "date" : "2022-11-15T00:00:00+02:00",
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
  "description" : "Revision, indikation (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RevisionIndication",
      "concept" : [{
        "code" : "femur_acetabulum_osteolysis",
        "display" : "Aseptisk løsning af femur- og acetabulumkomp. med osteolyse"
      },
      {
        "code" : "femur_acetabulum",
        "display" : "Aseptisk løsning af femur- og acetabulumkomp. uden osteolyse"
      },
      {
        "code" : "femur_osteolysis",
        "display" : "Aseptisk løsning alene af femurkomp. med osteolyse"
      },
      {
        "code" : "femur",
        "display" : "Aseptisk løsning alene af femurkomp. uden osteolyse"
      },
      {
        "code" : "acetabulum_osteolysis",
        "display" : "Aseptisk løsning alene af acetabulumkomp. med osteolyse"
      },
      {
        "code" : "acetabulum",
        "display" : "Aseptisk løsning alene af acetabulumkomp. uden osteolyse"
      },
      {
        "code" : "polyethylene_wear",
        "display" : "Polyethylenslitage uden aseptisk løsning"
      },
      {
        "code" : "infection",
        "display" : "Dyb infektion"
      },
      {
        "code" : "femur_fracture",
        "display" : "Femurfraktur (Vancouver klassifikation for fraktur)"
      },
      {
        "code" : "dislocation",
        "display" : "Luksation"
      },
      {
        "code" : "component_failure",
        "display" : "Komponentsvigt"
      },
      {
        "code" : "pain",
        "display" : "Smerter"
      },
      {
        "code" : "osteolysis",
        "display" : "Osteolyse/granulom uden løsning"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
