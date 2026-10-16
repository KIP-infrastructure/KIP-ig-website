# Foerste kontakt sted 2026 - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Foerste kontakt sted 2026**

## ValueSet: Foerste kontakt sted 2026 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KontaktSted2026 | *Version*:2.27.0 |
| Active as of 2026-06-24 | *Computable Name*:KontaktSted2026 |

 
Sted for første kontakt 2026 

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
  "id" : "KontaktSted2026",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KontaktSted2026",
  "version" : "2.27.0",
  "name" : "KontaktSted2026",
  "title" : "Foerste kontakt sted 2026",
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
  "description" : "Sted for første kontakt 2026",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ContactPlace",
      "concept" : [{
        "code" : "outpatient_clinic",
        "display" : "Fremmøde i ambulatorium"
      },
      {
        "code" : "home_visit",
        "display" : "Hjemmebesøg"
      },
      {
        "code" : "oversight_palliative",
        "display" : "Tilsyn anden afdeling med samtidig tilknytning af patienten til det palliative team"
      }]
    }]
  }
}

```
