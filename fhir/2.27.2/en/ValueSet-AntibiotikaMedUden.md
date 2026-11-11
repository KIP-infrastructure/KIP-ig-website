# Antibiotika (med/uden) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Antibiotika (med/uden)**

## ValueSet: Antibiotika (med/uden) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AntibiotikaMedUden | *Version*:2.27.2 |
| Active as of 2022-12-21 | *Computable Name*:AntibiotikaMedUden |

 
Antibiotika (med/uden) 

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
  "id" : "AntibiotikaMedUden",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AntibiotikaMedUden",
  "version" : "2.27.2",
  "name" : "AntibiotikaMedUden",
  "title" : "Antibiotika (med/uden)",
  "status" : "active",
  "date" : "2022-12-21T00:00:00+02:00",
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
  "description" : "Antibiotika (med/uden)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "with",
        "display" : "Med antibiotika"
      },
      {
        "code" : "without",
        "display" : "Uden antibiotika"
      }]
    }]
  }
}

```
