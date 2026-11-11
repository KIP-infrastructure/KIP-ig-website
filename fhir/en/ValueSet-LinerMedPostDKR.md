# Liner komponent med Post (DKR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Liner komponent med Post (DKR)**

## ValueSet: Liner komponent med Post (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LinerMedPostDKR | *Version*:2.27.2 |
| Active as of 2023-12-18 | *Computable Name*:LinerMedPostDKR |

 
Liner komponent med Post (DKR) 

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
  "id" : "LinerMedPostDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LinerMedPostDKR",
  "version" : "2.27.2",
  "name" : "LinerMedPostDKR",
  "title" : "Liner komponent med Post (DKR)",
  "status" : "active",
  "date" : "2023-12-18T00:00:00+02:00",
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
  "description" : "Liner komponent med Post (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/KomponentLiner",
      "concept" : [{
        "code" : "ps_traditional_ap",
        "display" : "PS (traditionel PS post med AP constraint)"
      },
      {
        "code" : "ps_rotating",
        "display" : "PS med roterende platform"
      },
      {
        "code" : "ckk_VV",
        "display" : "CCK (Constrained Condylar - Post med VV og rotations constraint)"
      },
      {
        "code" : "ckk_rotating",
        "display" : "CCK med roterende platform"
      },
      {
        "code" : "bi_cs",
        "display" : "Bi-CS: bicruciate substituting (forreste og bageste korsbånd ofres og substitueres med post og 2 cams)"
      }]
    }]
  }
}

```
