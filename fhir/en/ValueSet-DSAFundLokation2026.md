# Lokation for tromber, fundet vha. DSA 2026 - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lokation for tromber, fundet vha. DSA 2026**

## ValueSet: Lokation for tromber, fundet vha. DSA 2026 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DSAFundLokation2026 | *Version*:2.27.1 |
| Active as of 2026-06-24 | *Computable Name*:DSAFundLokation2026 |

 
Lokation for tromber, fundet vha. digital subtraktionsangiografi (DSA). 

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
  "id" : "DSAFundLokation2026",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DSAFundLokation2026",
  "version" : "2.27.1",
  "name" : "DSAFundLokation2026",
  "title" : "Lokation for tromber, fundet vha. DSA 2026",
  "status" : "active",
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
