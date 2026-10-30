# Funktion test ADL (DANDEM) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Funktion test ADL (DANDEM)**

## ValueSet: Funktion test ADL (DANDEM) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FunktionTestADLDANDEM | *Version*:2.27.1 |
| Active as of 2022-07-19 | *Computable Name*:FunktionTestADLDANDEM |

 
Funktion test ADL (DANDEM) 

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
  "id" : "FunktionTestADLDANDEM",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FunktionTestADLDANDEM",
  "version" : "2.27.1",
  "name" : "FunktionTestADLDANDEM",
  "title" : "Funktion test ADL (DANDEM)",
  "status" : "active",
  "date" : "2022-07-19T00:00:00+02:00",
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
  "description" : "Funktion test ADL (DANDEM)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/FunctionTest",
      "concept" : [{
        "code" : "faq_iadl",
        "display" : "FAQ (IADL)"
      },
      {
        "code" : "dad",
        "display" : "DAD"
      },
      {
        "code" : "adcs_adl",
        "display" : "ADCS-ADL"
      }]
    }]
  }
}

```
