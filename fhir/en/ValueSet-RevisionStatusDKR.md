# Revision, status (DKR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision, status (DKR)**

## ValueSet: Revision, status (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RevisionStatusDKR | *Version*:2.27.0 |
| Active as of 2022-10-14 | *Computable Name*:RevisionStatusDKR |

 
Revision, status (DKR) 

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
  "id" : "RevisionStatusDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RevisionStatusDKR",
  "version" : "2.27.0",
  "name" : "RevisionStatusDKR",
  "title" : "Revision, status (DKR)",
  "status" : "active",
  "date" : "2022-10-14T00:00:00+02:00",
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
  "description" : "Revision, status (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AlloplastyTypes",
      "concept" : [{
        "code" : "total_alloplasty",
        "display" : "Totalalloplastik"
      },
      {
        "code" : "medial_unilateral_knee",
        "display" : "Medial UKR"
      },
      {
        "code" : "lateral_unitaleral_knee",
        "display" : "Lateral UKR"
      },
      {
        "code" : "patellofemoral_unitaleral_knee",
        "display" : "Patellofemoral UKR"
      },
      {
        "code" : "hinge_knee",
        "display" : "Hængslet TKR"
      },
      {
        "code" : "cement_spacer_articulated",
        "display" : "Cementspacer, artikuleret"
      },
      {
        "code" : "cement_spacer_fixated",
        "display" : "Cementspacer, fikseret"
      },
      {
        "code" : "partial_resurfacing",
        "display" : "Partiel resurfacing"
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
