# Kellgren-Lawrence Klassifikation (DKR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kellgren-Lawrence Klassifikation (DKR)**

## ValueSet: Kellgren-Lawrence Klassifikation (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KellgrenLawsonKlassifikation | *Version*:2.27.1 |
| Active as of 2023-12-19 | *Computable Name*:KellgrenLawsonKlassifikation |

 
Kellgren-Lawrence Klassifikation (DKR) 

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
  "id" : "KellgrenLawsonKlassifikation",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KellgrenLawsonKlassifikation",
  "version" : "2.27.1",
  "name" : "KellgrenLawsonKlassifikation",
  "title" : "Kellgren-Lawrence Klassifikation (DKR)",
  "status" : "active",
  "date" : "2023-12-19T00:00:00+02:00",
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
  "description" : "Kellgren-Lawrence Klassifikation (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/KellgrenLawrenceKlassifikation",
      "concept" : [{
        "code" : "tvivlsom",
        "display" : "Tvivlsom (normal ledspalte)"
      },
      {
        "code" : "mild",
        "display" : "Mild (osteofyt dannelse, normal ledspalte)"
      },
      {
        "code" : "moderat",
        "display" : "Moderat (reduktion af ledspalte)"
      },
      {
        "code" : "svaer",
        "display" : "Svær (markant reduktion af ledspalte)"
      }]
    }]
  }
}

```
