# Boligform [DAP] - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Boligform [DAP]**

## ValueSet: Boligform [DAP] 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BoligformDAP | *Version*:2.27.3 |
| Active as of 2022-06-23 | *Computable Name*:BoligformDAP |

 
Boligform for Apopleksi [DAP] 

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
  "id" : "BoligformDAP",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BoligformDAP",
  "version" : "2.27.3",
  "name" : "BoligformDAP",
  "title" : "Boligform [DAP]",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Boligform for Apopleksi [DAP]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HousingType",
      "concept" : [{
        "code" : "house/apartment",
        "display" : "Egen bolig (Hus/lejlighed)"
      },
      {
        "code" : "nursinghome",
        "display" : "Plejebolig"
      },
      {
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
