# Onkologibehandlinger (kurativ) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Onkologibehandlinger (kurativ)**

## ValueSet: Onkologibehandlinger (kurativ) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OnkologibehandlingerKurativ | *Version*:2.27.0 |
| Active as of 2022-04-28 | *Computable Name*:OnkologibehandlingerKurativ |

 
Dette er alle typer af onkologibehandlinger for kurativ behandlingsintention 

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
  "id" : "OnkologibehandlingerKurativ",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OnkologibehandlingerKurativ",
  "version" : "2.27.0",
  "name" : "OnkologibehandlingerKurativ",
  "title" : "Onkologibehandlinger (kurativ)",
  "status" : "active",
  "date" : "2022-04-28T00:00:00+02:00",
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
  "description" : "Dette er alle typer af onkologibehandlinger for kurativ behandlingsintention",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/OncologyTreatmentCurative",
      "concept" : [{
        "code" : "adjuvant",
        "display" : "Adjuverende"
      },
      {
        "code" : "neoadjuvant",
        "display" : "Neo-adjuverende"
      },
      {
        "code" : "perioperative",
        "display" : "Perioperativ"
      },
      {
        "code" : "radio/chemo",
        "display" : "Definitiv kemo/radioterapi"
      }]
    }]
  }
}

```
