# Revision, udskiftning (DHR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision, udskiftning (DHR)**

## ValueSet: Revision, udskiftning (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RevisionUdskiftningDHR | *Version*:2.27.3 |
| Active as of 2022-11-08 | *Computable Name*:RevisionUdskiftningDHR |

 
Revision, udskiftning (DHR) 

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
  "id" : "RevisionUdskiftningDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RevisionUdskiftningDHR",
  "version" : "2.27.3",
  "name" : "RevisionUdskiftningDHR",
  "title" : "Revision, udskiftning (DHR)",
  "status" : "active",
  "date" : "2022-11-08T00:00:00+02:00",
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
  "description" : "Revision, udskiftning (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "acetabulum_component",
        "display" : "Acetabulumkomponent"
      },
      {
        "code" : "acetabulum_liner",
        "display" : "Acetabulumliner"
      },
      {
        "code" : "caput",
        "display" : "Caput"
      },
      {
        "code" : "detachable_neck",
        "display" : "Udskiftning af aftagelig hals (neck segment)"
      },
      {
        "code" : "femur_component",
        "display" : "Femurkomponent"
      },
      {
        "code" : "soft_tissue",
        "display" : "Bløddelsrevisioner uden udskiftning af protesekomponenter"
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
