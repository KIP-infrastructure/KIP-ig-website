# Aktuel Sygdomsforløb - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aktuel Sygdomsforløb**

## ValueSet: Aktuel Sygdomsforløb 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AktuelSygdomsforlob | *Version*:2.27.3 |
| Active as of 2022-06-22 | *Computable Name*:AktuelSygdomsforlob |

 
Er patienten i det aktuelle sygdomsforløb 

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
  "id" : "AktuelSygdomsforlob",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AktuelSygdomsforlob",
  "version" : "2.27.3",
  "name" : "AktuelSygdomsforlob",
  "title" : "Aktuel Sygdomsforløb",
  "status" : "active",
  "date" : "2022-06-22T00:00:00+02:00",
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
  "description" : "Er patienten i det aktuelle sygdomsforløb",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AktuelSygdomsforlob",
      "concept" : [{
        "code" : "indlagt",
        "display" : "Indlagt (stationær)"
      },
      {
        "code" : "ambulant",
        "display" : "Ambulant"
      }]
    }]
  }
}

```
