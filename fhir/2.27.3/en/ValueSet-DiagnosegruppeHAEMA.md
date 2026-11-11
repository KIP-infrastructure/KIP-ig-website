# Diagnosegruppe (HAEMA) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Diagnosegruppe (HAEMA)**

## ValueSet: Diagnosegruppe (HAEMA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DiagnosegruppeHAEMA | *Version*:2.27.3 |
| Active as of 2022-08-22 | *Computable Name*:DiagnosegruppeHAEMA |

 
Diagnosegruppe (HAEMA) 

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
  "id" : "DiagnosegruppeHAEMA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DiagnosegruppeHAEMA",
  "version" : "2.27.3",
  "name" : "DiagnosegruppeHAEMA",
  "title" : "Diagnosegruppe (HAEMA)",
  "status" : "active",
  "date" : "2022-08-22T00:00:00+02:00",
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
  "description" : "Diagnosegruppe (HAEMA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "al",
        "display" : "Akut leukæmi (AL)"
      },
      {
        "code" : "cll",
        "display" : "Kronisk lymfatisk leukæmi (CLL)"
      },
      {
        "code" : "lymfom",
        "display" : "Lymfom (LYFO)"
      },
      {
        "code" : "mds",
        "display" : "Myelodysplasi (MDS)"
      },
      {
        "code" : "myeloproliferativ_sygdom",
        "display" : "Myeloproliferativ sygdom"
      },
      {
        "code" : "myelomatose",
        "display" : "Myelomatose"
      }]
    }]
  }
}

```
