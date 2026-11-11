# Alloplastiktype (DKR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Alloplastiktype (DKR)**

## ValueSet: Alloplastiktype (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AlloplastiktypeDKR | *Version*:2.27.3 |
| Active as of 2022-10-13 | *Computable Name*:AlloplastiktypeDKR |

 
Alloplastiktype (DKR) 

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
  "id" : "AlloplastiktypeDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AlloplastiktypeDKR",
  "version" : "2.27.3",
  "name" : "AlloplastiktypeDKR",
  "title" : "Alloplastiktype (DKR)",
  "status" : "active",
  "date" : "2022-10-13T00:00:00+02:00",
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
  "description" : "Alloplastiktype (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AlloplastyTypes",
      "concept" : [{
        "code" : "total_alloplasty",
        "display" : "Totalalloplastik"
      },
      {
        "code" : "medial_unilateral_knee",
        "display" : "Medial UKA"
      },
      {
        "code" : "lateral_unitaleral_knee",
        "display" : "Lateral UKA"
      },
      {
        "code" : "patellofemoral_unitaleral_knee",
        "display" : "Patellofemoral UKA"
      },
      {
        "code" : "hinge_knee",
        "display" : "Roterende hængselalloplastik"
      },
      {
        "code" : "hinge_knee_resection",
        "display" : "Roterende hængselsalloplastik m. kondylresektion"
      },
      {
        "code" : "partial_resurfacing",
        "display" : "Partiel resurfacing"
      },
      {
        "code" : "cement_spacer_articulated",
        "display" : "Spacer, artikuleret"
      },
      {
        "code" : "cement_spacer_fixated",
        "display" : "Spacer, fikseret"
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
