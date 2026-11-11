# Komponent - acetabulum, status (DHR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komponent - acetabulum, status (DHR)**

## ValueSet: Komponent - acetabulum, status (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomponentAcetabulumStatusDHR | *Version*:2.27.3 |
| Active as of 2022-11-18 | *Computable Name*:KomponentAcetabulumStatusDHR |

 
Komponent - acetabulum, status (DHR) 

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
  "id" : "KomponentAcetabulumStatusDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomponentAcetabulumStatusDHR",
  "version" : "2.27.3",
  "name" : "KomponentAcetabulumStatusDHR",
  "title" : "Komponent - acetabulum, status (DHR)",
  "status" : "active",
  "date" : "2022-11-18T00:00:00+02:00",
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
  "description" : "Komponent - acetabulum, status (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "replaced",
        "display" : "Udskiftning af acetabulumkomponent"
      },
      {
        "code" : "partial_replacement",
        "display" : "Kun udskiftning af liner (ved revision)"
      },
      {
        "code" : "removed",
        "display" : "Fjernelse af acetabulumkomponent (ved revision)"
      },
      {
        "code" : "not_replaced",
        "display" : "Ikke udskiftet (revision)"
      }]
    }]
  }
}

```
