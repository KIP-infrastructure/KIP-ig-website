# Komponent - patella (DKR) revision - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komponent - patella (DKR) revision**

## ValueSet: Komponent - patella (DKR) revision 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomponentPatellaDKRrevision | *Version*:2.27.0 |
| Active as of 2023-01-16 | *Computable Name*:KomponentPatellaDKRrevision |

 
Komponent - patella (DKR) revision 

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
  "id" : "KomponentPatellaDKRrevision",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomponentPatellaDKRrevision",
  "version" : "2.27.0",
  "name" : "KomponentPatellaDKRrevision",
  "title" : "Komponent - patella (DKR) revision",
  "status" : "active",
  "date" : "2023-01-16T00:00:00+02:00",
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
  "description" : "Komponent - patella (DKR) revision",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen"
      },
      {
        "code" : "not_replaced",
        "display" : "Ikke udskiftet (ved revision)"
      },
      {
        "code" : "removed",
        "display" : "Fjernelse af patellakomponent"
      },
      {
        "code" : "other",
        "display" : "Anden komponent"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "metal_backing",
        "display" : "Metal-backing"
      },
      {
        "code" : "polyethylene",
        "display" : "Polyethylen"
      }]
    }]
  }
}

```
