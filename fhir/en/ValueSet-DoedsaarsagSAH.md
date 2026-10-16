# Dødsårsager [SAH] - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dødsårsager [SAH]**

## ValueSet: Dødsårsager [SAH] 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DoedsaarsagSAH | *Version*:2.27.0 |
| Active as of 2022-05-16 | *Computable Name*:DoedsaarsagSAH |

 
Dødsårsager [SAH] 

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
  "id" : "DoedsaarsagSAH",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DoedsaarsagSAH",
  "version" : "2.27.0",
  "name" : "DoedsaarsagSAH",
  "title" : "Dødsårsager [SAH]",
  "status" : "active",
  "date" : "2022-05-16T00:00:00+02:00",
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
  "description" : "Dødsårsager [SAH]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "DI63",
        "display" : "Hjerneinfarkt"
      },
      {
        "code" : "DI61",
        "display" : "Hjerneblødning"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "infarction-unspecific",
        "display" : "Hjerneinfarkt og blødning - ingen specifikation"
      },
      {
        "code" : "ami",
        "display" : "Myokardieinfarkt"
      },
      {
        "code" : "pulmonaryembolism",
        "display" : "Lungeemboli"
      },
      {
        "code" : "pneumonia",
        "display" : "Lungebetændelse"
      },
      {
        "code" : "vascular-unspecific",
        "display" : "Anden vaskulær årsag"
      },
      {
        "code" : "other",
        "display" : "Andet"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Ukendt"
      }]
    }]
  }
}

```
