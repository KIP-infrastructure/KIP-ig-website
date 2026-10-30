# Køn - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Køn**

## ValueSet: Køn 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Gender | *Version*:2.27.1 |
| Active as of 2022-08-11 | *Computable Name*:Gender |

 
Fhir køn system 

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
  "id" : "Gender",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Gender",
  "version" : "2.27.1",
  "name" : "Gender",
  "title" : "Køn",
  "status" : "active",
  "date" : "2022-08-11T00:00:00+02:00",
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
  "description" : "Fhir køn system",
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-AdministrativeGender",
      "version" : "4.0.0",
      "concept" : [{
        "code" : "F",
        "display" : "Kvinde"
      },
      {
        "code" : "M",
        "display" : "Mand"
      }]
    }]
  }
}

```
