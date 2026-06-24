# Lokation for tromber, fundet vha. DSA 2026 - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lokation for tromber, fundet vha. DSA 2026**

## ValueSet: Lokation for tromber, fundet vha. DSA 2026 (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DSAFundLokation2026 | *Version*:2.21.0 |
| Active as of 2026-06-24 | *Computable Name*:DSAFundLokation2026 |

 
Lokation for tromber, fundet vha. digital subtraktionsangiografi (DSA). 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "DSAFundLokation2026",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DSAFundLokation2026",
  "version" : "2.21.0",
  "name" : "DSAFundLokation2026",
  "title" : "Lokation for tromber, fundet vha. DSA 2026",
  "status" : "active",
  "experimental" : true,
  "date" : "2026-06-24T00:00:00+02:00",
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
  "description" : "Lokation for tromber, fundet vha. digital subtraktionsangiografi (DSA).",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DSAFindingsLocation",
      "concept" : [{
        "code" : "Extracranial",
        "display" : "Extracranial (CCA, ICA)"
      },
      {
        "code" : "Large_vessel_occlusion",
        "display" : "Large vessel occlusion, LVO (ICA, M1, Proksimal M2)"
      },
      {
        "code" : "Medium_vessel_occlusion",
        "display" : "Medium vessel occlusion, MEVO (Distal M2, ACA, PCA)"
      },
      {
        "code" : "Posterior_circulation",
        "display" : "Posterior circulation"
      }]
    }]
  }
}

```
