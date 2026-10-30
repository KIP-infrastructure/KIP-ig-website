# Specificer Cytogenetiske Fund - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Specificer Cytogenetiske Fund**

## ValueSet: Specificer Cytogenetiske Fund 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CytogeneticSpecificerFund | *Version*:2.27.1 |
| Active as of 2024-10-02 | *Computable Name*:CytogeneticSpecificerFund |

 
Specificer Cytogenetiske Fund 

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
  "id" : "CytogeneticSpecificerFund",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CytogeneticSpecificerFund",
  "version" : "2.27.1",
  "name" : "CytogeneticSpecificerFund",
  "title" : "Specificer Cytogenetiske Fund",
  "status" : "active",
  "date" : "2024-10-02T00:00:00+02:00",
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
  "description" : "Specificer Cytogenetiske Fund",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "normal",
        "display" : "Normal undersøgelse"
      },
      {
        "code" : "other",
        "display" : "Andre cytogenetiske fund"
      }]
    }]
  }
}

```
