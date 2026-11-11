# Genoplivning - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Genoplivning**

## ValueSet: Genoplivning 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Genoplivning | *Version*:2.27.2 |
| Active as of 2022-06-29 | *Computable Name*:Genoplivning |

 
Aktivitet ifm genoplivning 

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
  "id" : "Genoplivning",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Genoplivning",
  "version" : "2.27.2",
  "name" : "Genoplivning",
  "title" : "Genoplivning",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Aktivitet ifm genoplivning",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Genoplivning",
      "concept" : [{
        "code" : "hjmass_vent",
        "display" : "Hjertemassage og ventilation"
      },
      {
        "code" : "hjertemass",
        "display" : "Hjertemassage"
      },
      {
        "code" : "ventilation",
        "display" : "Ventilation"
      },
      {
        "code" : "ingen",
        "display" : "Ingen"
      }]
    }]
  }
}

```
