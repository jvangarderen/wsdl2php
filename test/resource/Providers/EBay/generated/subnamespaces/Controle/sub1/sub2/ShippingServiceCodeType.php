<?php

namespace Controle\sub1\sub2;
class ShippingServiceCodeType {
	const UPSGround = 'UPSGround';
	const UPS3rdDay = 'UPS3rdDay';
	const UPS2ndDay = 'UPS2ndDay';
	const UPSNextDay = 'UPSNextDay';
	const USPSPriority = 'USPSPriority';
	const USPSParcel = 'USPSParcel';
	const USPSMedia = 'USPSMedia';
	const USPSFirstClass = 'USPSFirstClass';
	const ShippingMethodStandard = 'ShippingMethodStandard';
	const ShippingMethodExpress = 'ShippingMethodExpress';
	const USPSExpressMail = 'USPSExpressMail';
	const UPSNextDayAir = 'UPSNextDayAir';
	const UPS2DayAirAM = 'UPS2DayAirAM';
	const Other = 'Other';
	const LocalDelivery = 'LocalDelivery';
	const NotSelected = 'NotSelected';
	const InternationalNotSelected = 'InternationalNotSelected';
	const StandardInternational = 'StandardInternational';
	const ExpeditedInternational = 'ExpeditedInternational';
	const USPSGlobalExpress = 'USPSGlobalExpress';
	const USPSGlobalPriority = 'USPSGlobalPriority';
	const USPSEconomyParcel = 'USPSEconomyParcel';
	const USPSEconomyLetter = 'USPSEconomyLetter';
	const USPSAirmailLetter = 'USPSAirmailLetter';
	const USPSAirmailParcel = 'USPSAirmailParcel';
	const UPSWorldWideExpressPlus = 'UPSWorldWideExpressPlus';
	const UPSWorldWideExpress = 'UPSWorldWideExpress';
	const UPSWorldWideExpedited = 'UPSWorldWideExpedited';
	const UPSStandardToCanada = 'UPSStandardToCanada';
	const OtherInternational = 'OtherInternational';
	const AT_StandardDispatch = 'AT_StandardDispatch';
	const AT_InsuredDispatch = 'AT_InsuredDispatch';
	const AT_Writing = 'AT_Writing';
	const AT_COD = 'AT_COD';
	const AT_ExpressOrCourier = 'AT_ExpressOrCourier';
	const AT_InsuredExpressOrCourier = 'AT_InsuredExpressOrCourier';
	const AT_SpecialDispatch = 'AT_SpecialDispatch';
	const AT_InsuredSpecialDispatch = 'AT_InsuredSpecialDispatch';
	const AT_Sonstige = 'AT_Sonstige';
	const AT_UnversicherterVersandInternational = 'AT_UnversicherterVersandInternational';
	const AT_VersicherterVersandInternational = 'AT_VersicherterVersandInternational';
	const AT_SonstigerVersandInternational = 'AT_SonstigerVersandInternational';
	const AT_UnversicherterExpressVersandInternational = 'AT_UnversicherterExpressVersandInternational';
	const AT_VersicherterExpressVersandInternational = 'AT_VersicherterExpressVersandInternational';
	const AU_Regular = 'AU_Regular';
	const AU_Express = 'AU_Express';
	const AU_Registered = 'AU_Registered';
	const AU_Courier = 'AU_Courier';
	const AU_Other = 'AU_Other';
	const AU_EMSInternationalCourierParcels = 'AU_EMSInternationalCourierParcels';
	const AU_EMSInternationalCourierDocuments = 'AU_EMSInternationalCourierDocuments';
	const AU_ExpressPostInternationalDocuments = 'AU_ExpressPostInternationalDocuments';
	const AU_AirMailInternational = 'AU_AirMailInternational';
	const AU_EconomyAirInternational = 'AU_EconomyAirInternational';
	const AU_SeaMailInternational = 'AU_SeaMailInternational';
	const AU_StandardInternational = 'AU_StandardInternational';
	const AU_ExpeditedInternational = 'AU_ExpeditedInternational';
	const AU_OtherInternational = 'AU_OtherInternational';
	const BEFR_StandardDelivery = 'BEFR_StandardDelivery';
	const BEFR_PriorityDelivery = 'BEFR_PriorityDelivery';
	const BEFR_ParcelPost = 'BEFR_ParcelPost';
	const BEFR_RegisteredMail = 'BEFR_RegisteredMail';
	const BEFR_Other = 'BEFR_Other';
	const BEFR_DePostInternational = 'BEFR_DePostInternational';
	const BEFR_UPSInternational = 'BEFR_UPSInternational';
	const BEFR_FedExInternational = 'BEFR_FedExInternational';
	const BEFR_DHLInternational = 'BEFR_DHLInternational';
	const BEFR_TPGPostTNTInternational = 'BEFR_TPGPostTNTInternational';
	const BEFR_StandardInternational = 'BEFR_StandardInternational';
	const BEFR_ExpeditedInternational = 'BEFR_ExpeditedInternational';
	const BEFR_OtherInternational = 'BEFR_OtherInternational';
	const BEFR_LaPosteInternational = 'BEFR_LaPosteInternational';
	const BENL_StandardDelivery = 'BENL_StandardDelivery';
	const BENL_PriorityDelivery = 'BENL_PriorityDelivery';
	const BENL_ParcelPost = 'BENL_ParcelPost';
	const BENL_RegisteredMail = 'BENL_RegisteredMail';
	const BENL_Other = 'BENL_Other';
	const BENL_DePostInternational = 'BENL_DePostInternational';
	const BENL_UPSInternational = 'BENL_UPSInternational';
	const BENL_FedExInternational = 'BENL_FedExInternational';
	const BENL_DHLInternational = 'BENL_DHLInternational';
	const BENL_TPGPostTNTInternational = 'BENL_TPGPostTNTInternational';
	const BENL_StandardInternational = 'BENL_StandardInternational';
	const BENL_ExpeditedInternational = 'BENL_ExpeditedInternational';
	const BENL_OtherInternational = 'BENL_OtherInternational';
	const BENL_LaPosteInternational = 'BENL_LaPosteInternational';
	const CA_StandardDelivery = 'CA_StandardDelivery';
	const CA_ExpeditedDelivery = 'CA_ExpeditedDelivery';
	const CA_PostLettermail = 'CA_PostLettermail';
	const CA_PostRegularParcel = 'CA_PostRegularParcel';
	const CA_PostExpeditedParcel = 'CA_PostExpeditedParcel';
	const CA_PostXpresspost = 'CA_PostXpresspost';
	const CA_PostPriorityCourier = 'CA_PostPriorityCourier';
	const CA_StandardInternational = 'CA_StandardInternational';
	const CA_ExpeditedInternational = 'CA_ExpeditedInternational';
	const CA_OtherInternational = 'CA_OtherInternational';
	const CA_PostExpeditedParcelUSA = 'CA_PostExpeditedParcelUSA';
	const CA_PostSmallPacketsUSA = 'CA_PostSmallPacketsUSA';
	const CA_PostXpresspostUSA = 'CA_PostXpresspostUSA';
	const CA_PostXpresspostInternational = 'CA_PostXpresspostInternational';
	const CA_PostInternationalParcelSurface = 'CA_PostInternationalParcelSurface';
	const CA_PostInternationalParcelAir = 'CA_PostInternationalParcelAir';
	const CA_SmallPacketsInternational = 'CA_SmallPacketsInternational';
	const CA_PurolatorInternational = 'CA_PurolatorInternational';
	const CA_PostSmallPacketsUSAGround = 'CA_PostSmallPacketsUSAGround';
	const CA_PostSmallPacketsUSAAir = 'CA_PostSmallPacketsUSAAir';
	const CA_SmallPacketsInternationalGround = 'CA_SmallPacketsInternationalGround';
	const CA_SmallPacketsInternationalAir = 'CA_SmallPacketsInternationalAir';
	const CA_PostUSALetterPost = 'CA_PostUSALetterPost';
	const CA_PostInternationalLetterPost = 'CA_PostInternationalLetterPost';
	const CA_UPSExpressCanada = 'CA_UPSExpressCanada';
	const CA_UPSExpressSaverCanada = 'CA_UPSExpressSaverCanada';
	const CA_UPSExpeditedCanada = 'CA_UPSExpeditedCanada';
	const CA_UPSStandardCanada = 'CA_UPSStandardCanada';
	const CA_UPSExpressUnitedStates = 'CA_UPSExpressUnitedStates';
	const CA_UPSExpeditedUnitedStates = 'CA_UPSExpeditedUnitedStates';
	const CA_UPS3DaySelectUnitedStates = 'CA_UPS3DaySelectUnitedStates';
	const CA_UPSStandardUnitedStates = 'CA_UPSStandardUnitedStates';
	const CA_UPSWorldWideExpress = 'CA_UPSWorldWideExpress';
	const CA_UPSWorldWideExpedited = 'CA_UPSWorldWideExpedited';
	const CH_StandardDispatchAPost = 'CH_StandardDispatchAPost';
	const CH_StandardDispatchBPost = 'CH_StandardDispatchBPost';
	const CH_InsuredDispatch = 'CH_InsuredDispatch';
	const CH_Writing = 'CH_Writing';
	const CH_COD = 'CH_COD';
	const CH_ExpressOrCourier = 'CH_ExpressOrCourier';
	const CH_InsuredExpressOrCourier = 'CH_InsuredExpressOrCourier';
	const CH_SpecialDispatch = 'CH_SpecialDispatch';
	const CH_InsuredSpecialDispatch = 'CH_InsuredSpecialDispatch';
	const CH_Sonstige = 'CH_Sonstige';
	const CH_SonstigerVersandInternational = 'CH_SonstigerVersandInternational';
	const CH_EconomySendungenInternational = 'CH_EconomySendungenInternational';
	const CH_PrioritySendungenInternational = 'CH_PrioritySendungenInternational';
	const CH_UrgentSendungenInternational = 'CH_UrgentSendungenInternational';
	const CN_PersonalDelivery = 'CN_PersonalDelivery';
	const CN_RegularPackage = 'CN_RegularPackage';
	const CN_DeliveryCompanyExpress = 'CN_DeliveryCompanyExpress';
	const CN_PostOfficeExpress = 'CN_PostOfficeExpress';
	const CN_Others = 'CN_Others';
	const CN_FastPostOffice = 'CN_FastPostOffice';
	const CN_ExpressDeliverySameCity = 'CN_ExpressDeliverySameCity';
	const CN_ExpressDeliveryOtherCities = 'CN_ExpressDeliveryOtherCities';
	const CN_StandardInternational = 'CN_StandardInternational';
	const CN_ExpeditedInternational = 'CN_ExpeditedInternational';
	const CN_OtherInternational = 'CN_OtherInternational';
	const CN_CODInternational = 'CN_CODInternational';
	const CN_StandardMailingInternational = 'CN_StandardMailingInternational';
	const CN_RegularLogisticsInternational = 'CN_RegularLogisticsInternational';
	const CN_EMSInternational = 'CN_EMSInternational';
	const CN_OthersInternational = 'CN_OthersInternational';
	const DE_StandardDispatch = 'DE_StandardDispatch';
	const DE_InsuredDispatch = 'DE_InsuredDispatch';
	const DE_Writing = 'DE_Writing';
	const DE_COD = 'DE_COD';
	const DE_ExpressOrCourier = 'DE_ExpressOrCourier';
	const DE_InsuredExpressOrCourier = 'DE_InsuredExpressOrCourier';
	const DE_SpecialDispatch = 'DE_SpecialDispatch';
	const DE_InsuredSpecialDispatch = 'DE_InsuredSpecialDispatch';
	const DE_UnversicherterVersand = 'DE_UnversicherterVersand';
	const DE_DeutschePostBrief = 'DE_DeutschePostBrief';
	const DE_DHLPostpaket = 'DE_DHLPostpaket';
	const DE_DHLPackchen = 'DE_DHLPackchen';
	const DE_DeutschePostWarensendung = 'DE_DeutschePostWarensendung';
	const DE_DeutschePostBuchersendung = 'DE_DeutschePostBuchersendung';
	const DE_HermesPaketUnversichert = 'DE_HermesPaketUnversichert';
	const DE_HermesPaketVersichert = 'DE_HermesPaketVersichert';
	const DE_IloxxTransportXXL = 'DE_IloxxTransportXXL';
	const DE_IloxxUbernachtExpress = 'DE_IloxxUbernachtExpress';
	const DE_IloxxStandard = 'DE_IloxxStandard';
	const DE_Sonstige = 'DE_Sonstige';
	const DE_UnversicherterVersandInternational = 'DE_UnversicherterVersandInternational';
	const DE_VersicherterVersandInternational = 'DE_VersicherterVersandInternational';
	const DE_DHLPostpaketInternational = 'DE_DHLPostpaketInternational';
	const DE_DHLPackchenInternational = 'DE_DHLPackchenInternational';
	const DE_SonstigerVersandInternational = 'DE_SonstigerVersandInternational';
	const DE_UnversicherterExpressVersandInternational = 'DE_UnversicherterExpressVersandInternational';
	const DE_VersicherterExpressVersandInternational = 'DE_VersicherterExpressVersandInternational';
	const DE_DeutschePostBriefLandInternational = 'DE_DeutschePostBriefLandInternational';
	const DE_DeutschePostBriefLuftInternational = 'DE_DeutschePostBriefLuftInternational';
	const DE_IloxxEuropaInternational = 'DE_IloxxEuropaInternational';
	const DE_IloxxWorldWideInternational = 'DE_IloxxWorldWideInternational';
	const ES_CartasNacionalesHasta20 = 'ES_CartasNacionalesHasta20';
	const ES_CartasNacionalesDeMas20 = 'ES_CartasNacionalesDeMas20';
	const ES_CartasInternacionalesHasta20 = 'ES_CartasInternacionalesHasta20';
	const ES_CartasInternacionalesDeMas20 = 'ES_CartasInternacionalesDeMas20';
	const ES_PaqueteAzulHasta2kg = 'ES_PaqueteAzulHasta2kg';
	const ES_PaqueteAzulDeMas2kg = 'ES_PaqueteAzulDeMas2kg';
	const ES_PaqueteInternacionalEconomico = 'ES_PaqueteInternacionalEconomico';
	const ES_Urgente = 'ES_Urgente';
	const ES_Otros = 'ES_Otros';
	const ES_StandardInternational = 'ES_StandardInternational';
	const ES_ExpeditedInternational = 'ES_ExpeditedInternational';
	const ES_OtherInternational = 'ES_OtherInternational';
	const ES_CartasPostalInternational = 'ES_CartasPostalInternational';
	const ES_EmsPostalExpressInternational = 'ES_EmsPostalExpressInternational';
	const ES_EconomyPacketInternational = 'ES_EconomyPacketInternational';
	const FR_ChronoposteInternationalClassic = 'FR_ChronoposteInternationalClassic';
	const FR_ColiposteColissimoDirect = 'FR_ColiposteColissimoDirect';
	const FR_DHLExpressEuropack = 'FR_DHLExpressEuropack';
	const FR_UPSStandard = 'FR_UPSStandard';
	const FR_PostOfficeLetter = 'FR_PostOfficeLetter';
	const FR_PostOfficeLetterFollowed = 'FR_PostOfficeLetterFollowed';
	const FR_PostOfficeLetterRecommended = 'FR_PostOfficeLetterRecommended';
	const FR_ColiposteColissimo = 'FR_ColiposteColissimo';
	const FR_ColiposteColissimoRecommended = 'FR_ColiposteColissimoRecommended';
	const FR_UPSStandardAgainstRefund = 'FR_UPSStandardAgainstRefund';
	const FR_Autre = 'FR_Autre';
	const FR_Ecopli = 'FR_Ecopli';
	const FR_Colieco = 'FR_Colieco';
	const FR_AuteModeDenvoiDeColis = 'FR_AuteModeDenvoiDeColis';
	const FR_RemiseEnMainPropre = 'FR_RemiseEnMainPropre';
	const FR_StandardInternational = 'FR_StandardInternational';
	const FR_ExpeditedInternational = 'FR_ExpeditedInternational';
	const FR_OtherInternational = 'FR_OtherInternational';
	const FR_LaPosteInternationalPriorityCourier = 'FR_LaPosteInternationalPriorityCourier';
	const FR_LaPosteInternationalEconomyCourier = 'FR_LaPosteInternationalEconomyCourier';
	const FR_LaPosteColissimoInternational = 'FR_LaPosteColissimoInternational';
	const FR_LaPosteColisEconomiqueInternational = 'FR_LaPosteColisEconomiqueInternational';
	const FR_LaPosteColissimoEmballageInternational = 'FR_LaPosteColissimoEmballageInternational';
	const FR_ChronopostClassicInternational = 'FR_ChronopostClassicInternational';
	const FR_ChronopostPremiumInternational = 'FR_ChronopostPremiumInternational';
	const FR_UPSStandardInternational = 'FR_UPSStandardInternational';
	const FR_UPSExpressInternational = 'FR_UPSExpressInternational';
	const FR_DHLInternational = 'FR_DHLInternational';
	const IN_Regular = 'IN_Regular';
	const IN_Express = 'IN_Express';
	const IN_NationalCOD = 'IN_NationalCOD';
	const IN_Courier = 'IN_Courier';
	const IN_LocalCOD = 'IN_LocalCOD';
	const IN_StandardInternational = 'IN_StandardInternational';
	const IN_ExpeditedInternational = 'IN_ExpeditedInternational';
	const IN_OtherInternational = 'IN_OtherInternational';
	const IN_FlatRateCOD = 'IN_FlatRateCOD';
	const IN_BuyerPicksUpAndPays = 'IN_BuyerPicksUpAndPays';
	const IT_RegularMail = 'IT_RegularMail';
	const IT_PriorityMail = 'IT_PriorityMail';
	const IT_MailRegisteredLetter = 'IT_MailRegisteredLetter';
	const IT_MailRegisteredLetterWithMark = 'IT_MailRegisteredLetterWithMark';
	const IT_InsuredMail = 'IT_InsuredMail';
	const IT_QuickMail = 'IT_QuickMail';
	const IT_RegularPackage = 'IT_RegularPackage';
	const IT_QuickPackage1 = 'IT_QuickPackage1';
	const IT_QuickPackage3 = 'IT_QuickPackage3';
	const IT_ExpressCourier = 'IT_ExpressCourier';
	const IT_StandardInternational = 'IT_StandardInternational';
	const IT_ExpeditedInternational = 'IT_ExpeditedInternational';
	const IT_OtherInternational = 'IT_OtherInternational';
	const NL_StandardDelivery = 'NL_StandardDelivery';
	const NL_ParcelPost = 'NL_ParcelPost';
	const NL_RegisteredMail = 'NL_RegisteredMail';
	const NL_Other = 'NL_Other';
	const NL_TPGPostTNTInternational = 'NL_TPGPostTNTInternational';
	const NL_UPSInternational = 'NL_UPSInternational';
	const NL_FedExInternational = 'NL_FedExInternational';
	const NL_DHLInternational = 'NL_DHLInternational';
	const NL_DPDGBRInternational = 'NL_DPDGBRInternational';
	const NL_GLSBusinessInternational = 'NL_GLSBusinessInternational';
	const NL_StandardInternational = 'NL_StandardInternational';
	const NL_ExpeditedInternational = 'NL_ExpeditedInternational';
	const NL_OtherInternational = 'NL_OtherInternational';
	const TW_RegisteredMail = 'TW_RegisteredMail';
	const TW_UnregisteredMail = 'TW_UnregisteredMail';
	const TW_COD = 'TW_COD';
	const TW_DwellingMatchPost = 'TW_DwellingMatchPost';
	const TW_DwellingMatchCOD = 'TW_DwellingMatchCOD';
	const TW_SelfPickup = 'TW_SelfPickup';
	const TW_ParcelPost = 'TW_ParcelPost';
	const TW_ExpressMail = 'TW_ExpressMail';
	const TW_Other = 'TW_Other';
	const TW_CPInternationalLetterPost = 'TW_CPInternationalLetterPost';
	const TW_CPInternationalParcelPost = 'TW_CPInternationalParcelPost';
	const TW_CPInternationalRegisteredLetterPost = 'TW_CPInternationalRegisteredLetterPost';
	const TW_CPInternationalRegisteredParcelPost = 'TW_CPInternationalRegisteredParcelPost';
	const TW_CPInternationalEMS = 'TW_CPInternationalEMS';
	const TW_CPInternationalOceanShippingParcel = 'TW_CPInternationalOceanShippingParcel';
	const TW_FedExInternationalPriority = 'TW_FedExInternationalPriority';
	const TW_FedExInternationalEconomy = 'TW_FedExInternationalEconomy';
	const TW_UPSWorldwideExpedited = 'TW_UPSWorldwideExpedited';
	const TW_UPSWorldwideExpress = 'TW_UPSWorldwideExpress';
	const TW_UPSWorldwideExpressPlus = 'TW_UPSWorldwideExpressPlus';
	const TW_OtherInternational = 'TW_OtherInternational';
	const UK_RoyalMailFirstClassStandard = 'UK_RoyalMailFirstClassStandard';
	const UK_RoyalMailSecondClassStandard = 'UK_RoyalMailSecondClassStandard';
	const UK_RoyalMailFirstClassRecorded = 'UK_RoyalMailFirstClassRecorded';
	const UK_RoyalMailSecondClassRecorded = 'UK_RoyalMailSecondClassRecorded';
	const UK_RoyalMailSpecialDelivery = 'UK_RoyalMailSpecialDelivery';
	const UK_RoyalMailStandardParcel = 'UK_RoyalMailStandardParcel';
	const UK_Parcelforce24 = 'UK_Parcelforce24';
	const UK_Parcelforce48 = 'UK_Parcelforce48';
	const UK_OtherCourier = 'UK_OtherCourier';
	const UK_SellersStandardRate = 'UK_SellersStandardRate';
	const UK_CollectInPerson = 'UK_CollectInPerson';
	const UK_SellersStandardInternationalRate = 'UK_SellersStandardInternationalRate';
	const UK_RoyalMailAirmailInternational = 'UK_RoyalMailAirmailInternational';
	const UK_RoyalMailAirsureInternational = 'UK_RoyalMailAirsureInternational';
	const UK_RoyalMailSurfaceMailInternational = 'UK_RoyalMailSurfaceMailInternational';
	const UK_RoyalMailInternationalSignedFor = 'UK_RoyalMailInternationalSignedFor';
	const UK_RoyalMailHMForcesMailInternational = 'UK_RoyalMailHMForcesMailInternational';
	const UK_ParcelForceInternationalDatapost = 'UK_ParcelForceInternationalDatapost';
	const UK_ParcelForceIreland24International = 'UK_ParcelForceIreland24International';
	const UK_ParcelForceEuro48International = 'UK_ParcelForceEuro48International';
	const UK_ParcelForceInternationalScheduled = 'UK_ParcelForceInternationalScheduled';
	const UK_OtherCourierOrDeliveryInternational = 'UK_OtherCourierOrDeliveryInternational';
	const UK_CollectInPersonInternational = 'UK_CollectInPersonInternational';
	const IE_SellersStandardRate = 'IE_SellersStandardRate';
	const IE_FirstClassLetterService = 'IE_FirstClassLetterService';
	const IE_SwiftPostNational = 'IE_SwiftPostNational';
	const IE_RegisteredPost = 'IE_RegisteredPost';
	const IE_EMSSDSCourier = 'IE_EMSSDSCourier';
	const IE_EconomySDSCourier = 'IE_EconomySDSCourier';
	const IE_OtherCourier = 'IE_OtherCourier';
	const IE_CollectionInPerson = 'IE_CollectionInPerson';
	const IE_SellersStandardRateInternational = 'IE_SellersStandardRateInternational';
	const IE_InternationalEconomyService = 'IE_InternationalEconomyService';
	const IE_InternationalPriorityService = 'IE_InternationalPriorityService';
	const IE_SwiftPostExpressInternational = 'IE_SwiftPostExpressInternational';
	const IE_SwiftPostInternational = 'IE_SwiftPostInternational';
	const IE_EMSSDSCourierInternational = 'IE_EMSSDSCourierInternational';
	const IE_EconomySDSCourierInternational = 'IE_EconomySDSCourierInternational';
	const IE_OtherCourierInternational = 'IE_OtherCourierInternational';
	const IE_CollectionInPersonInternational = 'IE_CollectionInPersonInternational';
	const PL_DomesticRegular = 'PL_DomesticRegular';
	const PL_DomesticSpecial = 'PL_DomesticSpecial';
	const FreightShipping = 'FreightShipping';
	const FreightShippingInternational = 'FreightShippingInternational';
	const USPSGround = 'USPSGround';
	const ShippingMethodOvernight = 'ShippingMethodOvernight';
	const CustomCode = 'CustomCode';
	const USPSPriorityFlatRateEnvelope = 'USPSPriorityFlatRateEnvelope';
	const USPSPriorityFlatRateBox = 'USPSPriorityFlatRateBox';
	const USPSGlobalPrioritySmallEnvelope = 'USPSGlobalPrioritySmallEnvelope';
	const USPSGlobalPriorityLargeEnvelope = 'USPSGlobalPriorityLargeEnvelope';
	const USPSExpressFlatRateEnvelope = 'USPSExpressFlatRateEnvelope';
	const UPSWorldWideExpressBox10kg = 'UPSWorldWideExpressBox10kg';
	const UPSWorldWideExpressBox25kg = 'UPSWorldWideExpressBox25kg';
	const UPSWorldWideExpressPlusBox10kg = 'UPSWorldWideExpressPlusBox10kg';
	const UPSWorldWideExpressPlusBox25kg = 'UPSWorldWideExpressPlusBox25kg';
	const HK_LocalPickUpOnly = 'HK_LocalPickUpOnly';
	const HK_LocalCourier = 'HK_LocalCourier';
	const HK_DomesticRegularShipping = 'HK_DomesticRegularShipping';
	const HK_DomesticSpecialShipping = 'HK_DomesticSpecialShipping';
	const HK_InternationalRegularShipping = 'HK_InternationalRegularShipping';
	const HK_InternationalSpecialShipping = 'HK_InternationalSpecialShipping';
	const SG_LocalPickUpOnly = 'SG_LocalPickUpOnly';
	const SG_LocalCourier = 'SG_LocalCourier';
	const SG_DomesticStandardMail = 'SG_DomesticStandardMail';
	const SG_DomesticNonStandardMail = 'SG_DomesticNonStandardMail';
	const SG_DomesticSpeedpostIslandwide = 'SG_DomesticSpeedpostIslandwide';
	const SG_InternationalStandardMail = 'SG_InternationalStandardMail';
	const SG_InternationalExpressMailService = 'SG_InternationalExpressMailService';
	const SG_InternationalCourier = 'SG_InternationalCourier';
	const BENL_DePostZendingNONPRIOR = 'BENL_DePostZendingNONPRIOR';
	const BENL_DePostZendingPRIOR = 'BENL_DePostZendingPRIOR';
	const BENL_DePostZendingAangetekend = 'BENL_DePostZendingAangetekend';
	const BENL_KilopostPakje = 'BENL_KilopostPakje';
	const BENL_Taxipost = 'BENL_Taxipost';
	const BENL_KialaAfhaalpunt = 'BENL_KialaAfhaalpunt';
	const BENL_VasteKostenStandaardVerzending = 'BENL_VasteKostenStandaardVerzending';
	const BENL_VasteKostenVersneldeVerzending = 'BENL_VasteKostenVersneldeVerzending';
	const BENL_VerzekerdeVerzending = 'BENL_VerzekerdeVerzending';
	const BEFR_LaPosteEnvoiNONPRIOR = 'BEFR_LaPosteEnvoiNONPRIOR';
	const BEFR_LaPosteEnvoiPRIOR = 'BEFR_LaPosteEnvoiPRIOR';
	const BEFR_LaPosteEnvoiRecommande = 'BEFR_LaPosteEnvoiRecommande';
	const BEFR_PaquetKilopost = 'BEFR_PaquetKilopost';
	const BEFR_Taxipost = 'BEFR_Taxipost';
	const BEFR_PointRetraitKiala = 'BEFR_PointRetraitKiala';
	const BEFR_LivraisonStandardPrixforFaitaire = 'BEFR_LivraisonStandardPrixforFaitaire';
	const BEFR_LivraisonExpressPrixforFaitaire = 'BEFR_LivraisonExpressPrixforFaitaire';
	const BEFR_LivraisonSecurise = 'BEFR_LivraisonSecurise';
	const BENL_DePostZendingPRIORInternational = 'BENL_DePostZendingPRIORInternational';
	const BENL_DePostZendingNONPRIORInternational = 'BENL_DePostZendingNONPRIORInternational';
	const BENL_DePostZendingAangetekendInternational = 'BENL_DePostZendingAangetekendInternational';
	const BENL_KilopostPakjeInternational = 'BENL_KilopostPakjeInternational';
	const BENL_TaxipostExpressverzending = 'BENL_TaxipostExpressverzending';
	const BENL_VerzekerdeVerzendingInternational = 'BENL_VerzekerdeVerzendingInternational';
	const BEFR_LaPosteenvoiePRIOR = 'BEFR_LaPosteenvoiePRIOR';
	const BEFR_LaPosteenvoieNONPRIOR = 'BEFR_LaPosteenvoieNONPRIOR';
	const BEFR_LaPosteenvoieRecommande = 'BEFR_LaPosteenvoieRecommande';
	const BEFR_PaquetKilopostInternationale = 'BEFR_PaquetKilopostInternationale';
	const BEFR_ExpressTaxipost = 'BEFR_ExpressTaxipost';
	const BEFR_LivraisonStandardInternationalePrixforFaitaire = 'BEFR_LivraisonStandardInternationalePrixforFaitaire';
	const BEFR_LivraisonExpressInternationalePrixforFaitaire = 'BEFR_LivraisonExpressInternationalePrixforFaitaire';
	const BEFR_LivraisonSecuriseInternational = 'BEFR_LivraisonSecuriseInternational';
	const FR_Chronopost = 'FR_Chronopost';
	const UK_RoyalMailSpecialDeliveryNextDay = 'UK_RoyalMailSpecialDeliveryNextDay';
	const CA_PostLightPacketInternational = 'CA_PostLightPacketInternational';
	const CA_PostLightPacketUSA = 'CA_PostLightPacketUSA';
	const PL_DHLInternational = 'PL_DHLInternational';
	const PL_InternationalRegular = 'PL_InternationalRegular';
	const PL_InternationalSpecial = 'PL_InternationalSpecial';
	const PL_UPSInternational = 'PL_UPSInternational';
	const CAFR_StandardDelivery = 'CAFR_StandardDelivery';
	const CAFR_ExpeditedDelivery = 'CAFR_ExpeditedDelivery';
	const CAFR_PostLettermail = 'CAFR_PostLettermail';
	const CAFR_PostRegularParcel = 'CAFR_PostRegularParcel';
	const CAFR_PostExpeditedParcel = 'CAFR_PostExpeditedParcel';
	const CAFR_PostXpresspost = 'CAFR_PostXpresspost';
	const CAFR_PostPriorityCourier = 'CAFR_PostPriorityCourier';
	const CAFR_StandardInternational = 'CAFR_StandardInternational';
	const CAFR_ExpeditedInternational = 'CAFR_ExpeditedInternational';
	const CAFR_OtherInternational = 'CAFR_OtherInternational';
	const CAFR_PostExpeditedParcelUSA = 'CAFR_PostExpeditedParcelUSA';
	const CAFR_PostSmallPacketsUSA = 'CAFR_PostSmallPacketsUSA';
	const CAFR_PostXpresspostUSA = 'CAFR_PostXpresspostUSA';
	const CAFR_PostXpresspostInternational = 'CAFR_PostXpresspostInternational';
	const CAFR_PostInternationalParcelSurface = 'CAFR_PostInternationalParcelSurface';
	const CAFR_PostInternationalParcelAir = 'CAFR_PostInternationalParcelAir';
	const CAFR_SmallPacketsInternational = 'CAFR_SmallPacketsInternational';
	const CAFR_PurolatorInternational = 'CAFR_PurolatorInternational';
	const CAFR_PostSmallPacketsUSAGround = 'CAFR_PostSmallPacketsUSAGround';
	const CAFR_PostSmallPacketsUSAAir = 'CAFR_PostSmallPacketsUSAAir';
	const CAFR_SmallPacketsInternationalGround = 'CAFR_SmallPacketsInternationalGround';
	const CAFR_SmallPacketsInternationalAir = 'CAFR_SmallPacketsInternationalAir';
	const CAFR_PostUSALetterPost = 'CAFR_PostUSALetterPost';
	const CAFR_PostInternationalLetterPost = 'CAFR_PostInternationalLetterPost';
	const CAFR_UPSExpressCanada = 'CAFR_UPSExpressCanada';
	const CAFR_UPSExpressSaverCanada = 'CAFR_UPSExpressSaverCanada';
	const CAFR_UPSExpeditedCanada = 'CAFR_UPSExpeditedCanada';
	const CAFR_UPSStandardCanada = 'CAFR_UPSStandardCanada';
	const CAFR_UPSExpressUnitedStates = 'CAFR_UPSExpressUnitedStates';
	const CAFR_UPSExpeditedUnitedStates = 'CAFR_UPSExpeditedUnitedStates';
	const CAFR_UPS3DaySelectUnitedStates = 'CAFR_UPS3DaySelectUnitedStates';
	const CAFR_UPSStandardUnitedStates = 'CAFR_UPSStandardUnitedStates';
	const CAFR_UPSWorldWideExpress = 'CAFR_UPSWorldWideExpress';
	const CAFR_UPSWorldWideExpedited = 'CAFR_UPSWorldWideExpedited';
	const UK_RoyalMailSpecialDelivery9am = 'UK_RoyalMailSpecialDelivery9am';
}

